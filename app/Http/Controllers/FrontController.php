<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Method;
use App\Models\PostOffice;
use App\Models\Upazila;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index(){
        //return view('welcome');
        SEOTools::setTitle('Home');
        SEOTools::setDescription(setting('site.description'));
       // notify()->success('Welcome to '.setting('site.title').'⚡️');
        //emotify('success', 'You are awesome, your data was successfully created');
       // smilify('success', 'You are successfully reconnected');
       // drakify('success') ; // for success alert
        //drakify('error') ;// for error alert
        //connectify('success', 'Connection Found', 'Success Message Here');

        return view('front.home');
    }
    public function about(){
        SEOTools::setTitle('About');
        SEOTools::setDescription(setting('site.description'));
        return view('front.about');
    }
    public function privacy(){
        SEOTools::setTitle('Privacy Policy');
        SEOTools::setDescription(setting('site.description'));
        return view('front.privacy');
    }
    public function terms(){
        SEOTools::setTitle('Terms & Condition');
        SEOTools::setDescription(setting('site.description'));
        return view('front.terms');
    }
    public function upazilas($id){
        $data = Upazila::where("district_id",$id)->get(["name", "id"]);
        $str = '<option value="">Select your Upazila</option>';
        foreach ($data as $d){
            $str = $str.'<option value="'.$d->id.'" >'.$d->name.'</option>';
        }

        return $str;
    }
    public function post_offices($id){
        $data = PostOffice::where("upazila_id",$id)->get();
        $str = '<option value="">Select your Post Office</option>';
        foreach ($data as $d){
            $str = $str.'<option value="'.$d->id.'" >'.$d->name.' '.$d->code.'</option>';
        }

        return $str;
    }
    public function pmethod($id){
        $data = Method::where("id",$id)->first();
        if ($data){
            $str = '<p>Account Name : '.$data->name.'</p>';
            $str = $str.'<p>Account Number : '.$data->account_number.'</p>';
            $str = $str.'<p>Account Details : '.$data->details.'</p>';
            return $str;
        }else{
            abort(404);
        }
    }
    public function go_back(){
        return redirect()->back();
    }
    public function add_post_office(){
        $districts = District::all();
        $upazilas = Upazila::all();
        $post_offices = PostOffice::all();
        return view('add_post_office',compact(['districts','upazilas','post_offices']));
    }
    public function store_post_office(Request $request){
        $p = PostOffice::where('name',$request->name)->where('district_id',$request->district_id)->first();
        if(!$p){
            $p_office =  new PostOffice();
            $p_office->district_id = $request->district_id;
            $p_office->upazila_id = $request->upazila_id;
            $p_office->name = $request->name;
            $p_office->code = $request->code ;
            $p_office->is_active = 1 ;
            $p_office->save() ;
            return redirect()->back()->with('message','New Post Office added Successfully');
        }else{
            return redirect()->back()->with('error','Your Post Office already stored!');
        }

    }
}
