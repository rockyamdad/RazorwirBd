<?php namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller{

    public function index()
    {

        return view('Users.login');
    }

    public function store()
    {

        $rules = array(
            'email' => 'required|email',
            'password' => 'required'
        );
        $validate = Validator::make(Input::all(),$rules);

        if($validate->fails())
        {
            return Redirect::to('/login')
                ->withErrors($validate);
        }
        else{

            if(Auth::attempt(array('email'=>Input::get('email'),'password'=>Input::get('password'))))
            {

                return  Redirect::to('/dashboard')
                    ->with('flash_notice', 'You are successfully logged in.');;
            }
            else
            {
                return   Redirect::to('/login')
                    ->with('flash_error', 'Your username/password combination was incorrect.');
            }
        }
    }
    public function getLogout()
    {
        Session::flush();
        Auth::logout();
        return Redirect::to('/login')->with('message', 'Your are now logged out!');
    }
}