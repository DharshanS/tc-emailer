<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;

class HomeController extends Controller
{
public function mail()
{
    //team@haloflights.co.uk
   $name = 'Haloflights Developers';
   Mail::to('cdharshans@gmail.com')->send(new SendMailable($name));

   return 'Email was sent';
}
}
