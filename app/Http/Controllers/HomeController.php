<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	public function index()
	{
		return view('Frontends.index');
	}
	public function aboutUs()
	{
		return view('Frontends.aboutUs');
	}
}
