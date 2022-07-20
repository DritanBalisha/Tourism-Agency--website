<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book_now extends Model
{
    protected $table = 'book_nows';
    protected $fillalbe = [
        'name',  
        'email',
        'phone',
        'city',
        'rooms',
        'checkIn',
        'checkOut',
        'adults',
        'children'
    ];
}
