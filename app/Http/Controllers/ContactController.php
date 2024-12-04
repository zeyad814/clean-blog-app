<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Validator;


class ContactController extends Controller
{
    public function index(){
        return view('front.contact');
    }


    public function sendMessage(Request $request){

        $request->validate(
            [
                'name' =>['required','string','max:10'],
                'email' =>'required|email|max:255',
                'phone' =>'required|numeric',
                'content' =>'required|string|max:1000'
            ]
        );

        $data = $request->all();
        $message = new Message();
        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->phone = $data['phone'];
        $message->content = $data['content'];
        $message->save();

        return back()->with('success','data inserted successfully');
    }
}
