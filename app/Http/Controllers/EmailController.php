<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request){

        Mail::send('email.send',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function($message)
            {
                $message->from('Crete Website');
                $message->to('info@crete-dev.com', 'Crete')->subject('Contact Us Form');
            });

        return response()->json(['message' => 'Request completed']);

    }
}
