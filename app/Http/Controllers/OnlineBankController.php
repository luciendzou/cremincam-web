<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OnlineBankController extends Controller
{
    public function register()
    {
        return view('onlinebank.register');
    }

    public function newsletters(Request $request)
    {
        //validate inputs
       $request->validate([
           'email'=>'required|email',
       ]);
/*
       $listId = env('MAILCHIMP_LIST_ID');

       $mailchimp = new \Mailchimp(env('MAILCHIMP_KEY'));

       $campaign = $mailchimp->campaigns->create('regular', [
           'list_id' => $listId,
           'subject' => 'Example Mail',
           'from_email' => 'lucien.dzou@cremincam.com',
           'from_name' => 'Rajesh',
           'to_name' => 'Rajesh Subscribers'

       ], [
           'html' => $request->input('content'),
           'text' => strip_tags($request->input('content'))
       ]);

       //Send campaign
       $mailchimp->campaigns->send($campaign['id']);

       if (!$mailchimp) {
        return back()->with('fail','Your Campaign is not ready to send.');
        } else {
            return back()->with('success','Campaign send successfully.');
        } */
    }
}
