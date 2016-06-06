<?php

namespace App\Http\Controllers;

use DB;
use Input;
use Illuminate\Http\Request;
use Session;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SearchController extends Controller
{
    public function index($title)
	{
		//dd(Input::all());
	    $searches = DB::table('movies')->where('title' ,'=', $title)->get(); //how to get phrase from search.blade.php and how to make a query ???
	    Session::put('searches' , $searches);
	    return view('profile');
	    
	}
}
