<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
	public function home(){
		return view('home');
	}
	public function welcome(){
		return view('welcome');
	}
	public function services(){
		return view('services');
	}
	public function tipe(){
		return view('tipe');
	}
}
