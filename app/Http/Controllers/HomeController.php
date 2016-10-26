<?php namespace App\Http\Controllers;

use App\Product;

class HomeController extends Controller {

	public function index()
	{
		$newArrivals = Product::orderBy('id','desc')->take(7)->get();
		return view('Frontends.index',compact('newArrivals'));
	}
	public function aboutUs()
	{
		return view('Frontends.aboutUs');

	}
	public function newArrival(){

		$newArrivals = Product::orderBy('id','desc')->take(7)->get();
		return view('Frontends.index',compact('newArrivals'));
	}

	public function products(){

		$products = Product::orderBy('id','desc')->get();
		return view('Frontends.products',compact('products'));
	}
}
