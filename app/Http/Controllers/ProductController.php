<?php namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller {

	public function index()
	{
		return view('Backend.dashboard');
	}
	public function add(){

		return view('Products.add');
	}
	public function store(){

		$product = new Product();
		$data = Input::all();

		$product->create($data);

		return Redirect::to('dashboard');
	}
	public function products(){

	}

}
