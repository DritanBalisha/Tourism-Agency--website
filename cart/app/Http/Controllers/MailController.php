<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\book;

class MailController extends Controller
{
    public function sendMail(Request $request) {

        $data=[
            'name'=>$request->name,
            'city'=>$request->city,
            'email'=>$request->email,
            'rooms'=>$request->rooms,
            'checkIn'=>$request->checkIn,
            'checkOut'=>$request->checkOut
        ];
        Mail::to($email)->send(new book($data));

        return view('welcome');
    }
}
