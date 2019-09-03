<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use Illuminate\Support\Facades\Request;

class HomeController extends Controller
{
public function mail()
{
    //team@haloflights.co.uk
   $name = 'Haloflights Developers';
   Mail::to('cdharshans@gmail.com')->send(new SendMailable($name));

   return 'Email was sent';
}
    public function sendEmail(\Illuminate\Http\Request $request)
    {
        $templateInfo = json_decode($request->getContent(),true);

        Mail::to($templateInfo['to'])->send(new SendMailable($templateInfo));
        try {



            return response()->json(true);
        }
        catch (\Exception $e){
            return response()->json(false);
    }


    }
}
