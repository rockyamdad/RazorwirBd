<?php namespace App\Http\Controllers;

use App\Product;

class HomeController extends Controller {

	public function index()
	{
		$newArrivals = Product::orderBy('id','desc')->take(5)->get();
		return view('Frontends.index',compact('newArrivals'));
	}
	public function aboutUs()
	{
		return view('Frontends.aboutUs');

	}
	public function contactUs()
	{
		return view('Frontends.contactUs');

	}
	public function newArrival(){

		$newArrivals = Product::orderBy('id','desc')->take(7)->get();
		return view('Frontends.index',compact('newArrivals'));
	}
	public function productView($id){

		$product = Product::find($id);

		return view('Frontends.productView',compact('product'));
	}

	public function products(){

		$products = Product::orderBy('id', 'desc')->paginate(6);
		return view('Frontends.products',compact('products'));
	}
}
