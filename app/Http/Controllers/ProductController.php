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
		if (file_exists(public_path('images/'.$request->file('image')->getClientOriginalName()))) {
			Session::flash('message', 'Same File name already exists.');
			return redirect()->back();
		}
		$product = new Product();
		$file = $request->file('image')->getClientOriginalName();
		$product->image = $file;
		$product->name = $request->get('name');
		$product->color = $request->get('color');
		$product->size = $request->get('size');
		$product->price = $request->get('price');
		$product->type = $request->get('type');
		$product->details = $request->get('details');
		$product->brand = $request->get('brand');
		$product->origin_name = $request->get('origin_name');
		$product->save();

		$imageName = $request->file('image')->getClientOriginalName();
		$request->file('image')->move(
			base_path() . '/public/images/', $imageName
		);
		Session::flash('message', 'Product has been Successfully Created.');

		return Redirect::to('list');
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
		if (file_exists(public_path('images/'.$request->file('image')->getClientOriginalName()))) {
			Session::flash('message', 'Same File name already exists.');
			return redirect()->back();
		}

		$product = Product::find($id);

		$product->name = $request->get('name');
		$product->color = $request->get('color');
		$product->size = $request->get('size');
		$product->price = $request->get('price');
		$product->type = $request->get('type');
		$product->details = $request->get('details');
		$product->brand = $request->get('brand');
		$product->origin_name = $request->get('origin_name');

		if($request->hasFile('image')) {
			$file = $request->file('image')->getClientOriginalName();
			$product->image = $file;

			$imageName = $request->file('image')->getClientOriginalName();
			$request->file('image')->move(
				base_path() . '/public/images/', $imageName
			);
		}
		$product->save();

		Session::flash('message', 'Product has been Successfully Updated.');

		return Redirect::to('list/');
	}

	public function getDelete($id)
	{
		$product = Product::find($id);
		$product->delete();
		Session::flash('message', 'Product has been Successfully Deleted.');
		return Redirect::to('list');
	}

}
