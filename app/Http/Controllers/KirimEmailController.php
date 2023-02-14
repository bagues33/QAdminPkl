<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\NotifikasiEmail;
use Illuminate\Support\Facades\Mail;

class KirimEmailController extends Controller
{
    public function index(){
 
		Mail::to("tofanbagus33@gmail.com")->send(new NotifikasiEmail());
 
		return "Email telah dikirim";
 
	}
}
