<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function index()
	{	
		setlocale(LC_MONETARY, 'de_DE');

		$items = DB::table('items')->get();
		return View::make('sites.index', array('items' => $items));
	}

	public function searchItems()
	{
	    if (!Request::ajax()) {
	        return null;
	    }

	    $input =  Input::get('query');
	   	$Items = DB::table('items')->where('name', 'LIKE', '%' . $input . '%')->get();

	    return $Items;
	}

	public function impressum(){
		return View::make('sites.impressum');
	}

	public function datenschutz(){
		return View::make('sites.datenschutz');
	}

	public function about(){
		return View::make('sites.about');
	}
}
