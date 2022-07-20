<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book_now;
use Illuminate\Support\Facades\Mail;
use App\Mail\book;

class BookingController extends Controller
{
     public function index()
     {
        return view('faqa');
    }


    public function insert(Request $request) 
    {
        $book_nows = new Book_now();
        $book_nows->name = $request->input('name');
        $book_nows->email = $request->input('email');
        $book_nows->phone = $request->input('phone');
        $book_nows->city = $request->input('city');
        $book_nows->rooms = $request->input('rooms');
        $book_nows->checkIn = $request->input('checkIn');
        $book_nows->checkOut = $request->input('checkOut');
        $book_nows->adults = $request->input('adults');
        $book_nows->children = $request->input('children');
        $book_nows->save();

        $data=[
            'name'=>$request->name,
            'city'=>$request->city,
            'email'=>$request->email,
            'rooms'=>$request->rooms,
            'checkIn'=>$request->checkIn,
            'checkOut'=>$request->checkOut
        ];
        Mail::to($request->email)->send(new book($data));

        return view('faqa');

        // return redirect("/")->with('status',"Inserted Data");
    }

}
