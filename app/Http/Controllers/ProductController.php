<?php namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Validator;

class ProductController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}
	public function index()
	{
		return view('Backend.dashboard');
	}
	public function add(){

		return view('Products.add');
	}
	public function store(Request $request){

		$product = new Product();
		$data = Input::all();

		$product->create($data);
		$product->save();

		$imageName = $product->id . '.' .
			$request->file('image')->getClientOriginalExtension();
		$request->file('image')->move(
			base_path() . '/public/images/', $imageName
		);
		Session::flash('message', 'Product has been Successfully Created.');

		return Redirect::to('dashboard');
	}
	public function products(){
		$products = Product::paginate(10);
		return view('Products.list',compact('products'));
	}

	public function edit($id){
		$product = Product::find($id);
		return view('Products.edit',compact('product'));
	}
	public function postUpdate(Request $request,$id)
	{
		$ruless = array(
			'name' => 'required',
			'brand' => 'required',
			'origin_name' => 'required',
		);

		$product = Product::find($id);
		$product->update($request->all( ));

		/*$imageName = $product->id . '.' .
			$request->file('image')->getClientOriginalExtension();
		$request->file('image')->move(
			base_path() . '/public/images/', $imageName
		);*/

		Session::flash('message', 'Product has been Successfully Updated.');

		return Redirect::to('list/');
	}

}
