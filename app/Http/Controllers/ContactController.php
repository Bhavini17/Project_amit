<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ContactController extends Controller
{
    public function showForm()
    {
    	return view('webpages.contact-us');
    }


    public function sendContactInfo(Requests\ContactMeRequest $request)
  {
    $data = $request->only('fname','lname', 'email', 'phone');
    $data['messageLines'] = explode("\n", $request->get('message'));
 	 //$data['messageLines'] =  $request->get('message');
    \Mail::send('webpages.email', [ 'data'=>$data ]  , function ($message) use ($data) {
      $message->subject('Blog Contact Form: '.$data['fname'])
              ->to('amitpundeer039@gmail.com')
             ->replyTo($data['email']);
    });

    return back()
        ->withSuccess("Thank you for your message. It has been sent.");
  }
}
