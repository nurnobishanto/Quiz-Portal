<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //
    public function index(){
        SEOTools::setTitle('Contact');
        SEOTools::setDescription(setting('site.description'));
        return view('front.contact');
    }
    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:11|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();
        Contact::create($input);
        //  Send mail to admin
        \Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'phone' => $input['phone'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('support@quizportal.online', 'Quiz Portal Online')->subject($request->get('subject'));
        });

        return redirect()->back()->with([
            'success' => 'Contact Form Submit Successfully',
            'message' => 'Contact Form Submit Successfully'
        ]);
    }
}