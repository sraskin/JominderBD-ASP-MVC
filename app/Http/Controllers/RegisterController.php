<?php

namespace App\Http\Controllers;

use App\Register;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function login()
    {
        return view('register.login');
    }

    public function store()
    {
        $data = Input::except(array('_token'));
        $rule = array(
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'city' => 'required',
            'area' => 'required',
            'password' => 'required|min:6|same:cpassword',
            'cpassword' => 'required|min:6',
        );

        $validator = Validator::make($data, $rule);

        if ($validator->fails()) {
            return Redirect::to('register')
                ->withErrors($validator->messages());
        } else {
            Register::saveFormData(Input::except(array('_token', 'cpassword')));

            return Redirect::to('register')
                ->withMessage('Data inserted');
        }
    }

    public function doLogin()
    {
// validate the info, create rules for the inputs
        $rules = array(
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required|alphaNum|min:6' // password can only be alphanumeric and has to be greater than 3 characters
        );

// run the validation rules on the inputs from the form
        $validator = Validator::make(Input::all(), $rules);

// if the validator fails, redirect back to the form
        if ($validator->fails()) {
            return Redirect::to('login')
                ->withErrors($validator)// send back all errors to the login form
                ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
        } else {

            // create our user data for the authentication
            $userdata = array(
                'email' => Input::get('email'),
                'password' => Input::get('password')
            );

            // attempt to do the login
            if (Auth::attempt($userdata)) {

                // validation successful!
                // redirect them to the secure section or whatever
                // return Redirect::to('secure');
                // for now we'll just echo success (even though echoing in a controller is bad)
                return Redirect::to('/');

            } else {

                // validation not successful, send back to form
                return Redirect::to('login');

            }

        }
    }
}
