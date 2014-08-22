<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home')->with('title', '图邮')
	                         ->with('class', 'home');
});

Route::get('/purchasecredit', array('as' => 'pcredit', function() 
{
	return View::make('about')->with('title', '关于图邮')
	                          ->with('class', 'about');
}));


Route::get('/cart', array('as' => 'cart', function() 
{
	return View::make('about')->with('title', '关于图邮')
	                          ->with('class', 'about');
}));

Route::get('/about', array('as' => 'about', function() 
{
	return View::make('about')->with('title', '关于图邮')
	                          ->with('class', 'about');
}));

Route::get('/contact', array('as' => 'contact', function(){
	return View::make('about')->with('title', 'test')
	                          ->with('class', 'contact');
}));

Route::get('/login', array('as' => 'login', function(){
	return View::make('about')->with('title', 'test')
	                          ->with('class', 'contact');
}));

Route::get('/register', array('as' => 'register', function(){
	return View::make('about')->with('title', 'test')
	                          ->with('class', 'contact');
}));

Route::post('/subscribe', function(){
	$input = Input::all();
	$rules = array('email => required|email');

	$validation = Validator::make($input, $rules);
	if($validation->passes())
	{
		Subscribe::create($input);
		return Redirect::to('home')->with('success', '感谢使用');
	}
	return Redirect::to('home')
				->withInput()
				->withErrors($validation)
				->with('message', '信息验证错误！');
});