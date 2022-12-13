<?php

namespace App\Http\Controllers;

use App\Models\Deposite;
use App\Models\District;
use App\Models\ExamCategory;
use App\Models\Mcq;
use App\Models\Method;
use App\Models\Notice;
use App\Models\PostOffice;
use App\Models\Quiz;
use App\Models\Result;
use App\Models\Subject;
use App\Models\Upazila;
use App\Models\User;
use App\Models\Withdraw;
use Artesaos\SEOTools\Facades\SEOTools;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PortalController extends Controller
{
    //
    public function index(){
        $users = User::all();
        $subjects = Subject::all();
        $quiz_categories = ExamCategory::all();
        $quizzes = Quiz::all();
        $mcqs = Mcq::all();
        $notice = Notice::orderBy('id', 'DESC')->get()->take(5);

        $deposit =  Deposite::where('user_id',auth()->user()->id)->where('status','approved')->sum('amount');
        $withdraw =  Withdraw::where('user_id',auth()->user()->id)->where('status','approved')->sum('amount');
        $deposit_tr =  Deposite::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->get()->take(10);
        $withdraw_tr =  Withdraw::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->get()->take(10);
        $pending_deposit =  Deposite::where('user_id',auth()->user()->id)->where('status','pending')->sum('amount');
        $pending_withdraw =  Withdraw::where('user_id',auth()->user()->id)->where('status','pending')->sum('amount');
        $reject_deposit =  Deposite::where('user_id',auth()->user()->id)->where('status','reject')->sum('amount');
        $reject_withdraw =  Withdraw::where('user_id',auth()->user()->id)->where('status','reject')->sum('amount');
        $attempt_quizzes = Result::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->get()->take(10);
        $user_count = $users->count();
        SEOTools::setTitle('Dashboard - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        return view('std_portal.home',compact([
            'user_count',
            'subjects','quiz_categories','quizzes','mcqs',
            'deposit_tr','withdraw_tr',
            'deposit','withdraw',
            'pending_deposit','pending_withdraw',
            'reject_deposit','reject_withdraw',
            'notice','attempt_quizzes']));
    }
    public function attempt(){
        SEOTools::setTitle('Attempts - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        $result = Result::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->get();
        return view('std_portal.attempts',compact('result'));
    }
    public function result(){
        SEOTools::setTitle('Results - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        $result = Result::where('user_id',Auth::user()->id)->orderBy('created_at', 'desc')->get();

        return view('std_portal.results',compact('result'));
    }
    public function rank($id){
        $quiz = Quiz::where('id', $id)->first();
        if ($quiz){
            $result = Result::where('quiz_id', $id)->orderBy('mark', 'DESC')->orderBy('time', 'ASC')->orderBy('created_at', 'ASC')->get();
            SEOTools::setTitle('Rank - '.$quiz->name);
            SEOTools::setDescription(setting('site.description'));
            return view('std_portal.rank', compact(['result', 'quiz']));
        }else{
            abort(404);
        }
    }
    public function single_result($id){

        $result = Result::where('id',$id)->first();
        if ($result){
            SEOTools::setTitle($result->quiz->name.' - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            Session::put('success', 'Quiz Submitted, Check your Result');
            return view('std_portal.result',compact('result'));
        }else{
            abort(404);
        }

    }
    public function transaction(){
        SEOTools::setTitle('Transactions - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        $deposit_tr =  Deposite::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->get();
        $withdraw_tr =  Withdraw::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('std_portal.transaction',compact([
            'deposit_tr',
            'withdraw_tr',
           ]));

    }
    public function withdraw(){
        SEOTools::setTitle('Withdraws - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        $methods = Method::all();
        $withdraw_tr =  Withdraw::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->get();
        $deposit =  Deposite::where('user_id',auth()->user()->id)->where('status','approved')->sum('amount');
        $withdraw =  Withdraw::where('user_id',auth()->user()->id)->where('status','approved')->sum('amount');
        $balance = $deposit - $withdraw;
        return view('std_portal.withdraw',compact([
            'methods',
            'withdraw_tr',
            'balance'
        ]));

    }
    public function deposit(){
        SEOTools::setTitle('Deposits - '.setting('site.title'));
        SEOTools::setDescription(setting('site.description'));
        $methods = Method::all();
        $deposit_tr =  Deposite::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->get();
        return view('std_portal.deposit',compact([
            'deposit_tr',
            'methods'

        ]));

    }
    public function withdraw_req(Request $request){

        $withdraw = new Withdraw();
        $withdraw->user_id = Auth::user()->id;
        $withdraw->amount = $request->amount;
        $withdraw->account_number = $request->account_number;
        $withdraw->method_id = $request->method_id;
        $withdraw->note = $request->note;
        $withdraw->status = 'pending';
        $withdraw->save();
        Session::put('info', 'Your Withdraw request has been pending. It will be approved soon. If it Will take more time you can contact with our support, Thanks.');
        return redirect()->back();

    }
    public function deposit_req(Request $request){

        $deposit = new Deposite();
        $deposit->user_id = Auth::user()->id;
        $deposit->amount = $request->amount;
        $deposit->method_id = $request->method_id;
        $deposit->trid = $request->trid;
        $deposit->note = $request->note;
        $deposit->status = 'pending';
        $deposit->save();
        Session::put('info', 'Your Deposit request has been pending. It will be approved soon. If it Will take more time you can contact with our support, Thanks.');
        return redirect()->back();

    }
    public function profile(){
        $myInfo = User::where('id',Auth::user()->id)->first();
        if ($myInfo){
            $districts = District::all();
            $upazilas = Upazila::all();
            $post_offices = PostOffice::all();
            SEOTools::setTitle('My Profile - '.setting('site.title'));
            SEOTools::setDescription(setting('site.description'));
            return view('std_portal.profile',compact(['myInfo','districts','upazilas','post_offices']));
        }else{
            abort(404);
        }
    }
    public function info_update(Request $request){
        $myInfo = User::where('id',Auth::user()->id)->first();
        if ($myInfo){
            $myInfo->name = $request->name;
            $myInfo->phone = $request->phone;
            $myInfo->dob = $request->dob;
            $myInfo->school = $request->school;
            $myInfo->profession = $request->profession;
            $myInfo->district_id = $request->district_id;
            $myInfo->upazila_id = $request->upazila_id;
            $myInfo->post_office_id = $request->post_office_id;
            $myInfo->address = $request->address;
            $myInfo->update();
            Session::put('success', 'Profile Information Updated');
            return redirect()->back();
        }else{
            abort(404);
        }

    }
    public function password_update(Request $request){
        $request->validate([
            'password' => ['required','min:8','max:32'],
            'confirm_password' => ['same:password'],
        ],
        [
            'password.required' => 'Password Required',
            'password.min' => 'Password length Minimum 8 Char',
            'password.max' => 'Password length Maximum 32 Char',
            'confirm_password.same' => 'Password and Confirm Password Must be Same!',
        ]);
        $myInfo = User::where('id',Auth::user()->id)->first();
        if ($myInfo){
            $myInfo->password = Hash::make($request->confirm_password);
            $myInfo->update();
            Session::put('success', 'Profile Password Updated');
            return redirect()->back();
        }else{
            abort(404);
        }

    }
    public function photo_update(Request $request){

        $request->validate([
            'image'=> 'image|required',
        ]);
        $myInfo = User::where('id',Auth::user()->id)->first();
        if($myInfo){
            if($request->file('image')){
                $file= $request->file('image');
                $filename= date('YmdHi').$file->getClientOriginalName();
                $file-> move(public_path('storage/user'), $filename);
                $myInfo['image']= "user/".$filename;
            }
            $myInfo->update();
            Session::put('success', 'Profile Photo Updated');
            return redirect()->back();
        }else{
            abort(404);
        }

    }

}
