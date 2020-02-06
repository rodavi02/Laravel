<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller {
	public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('home');
    }

    public function getHome() {
    	if(Auth::check()) {
    		return redirect()->action('CatalogController@getIndex');
    	} else {
    		return redirect()->action('HomeController@getHome');
    	}
    }
}