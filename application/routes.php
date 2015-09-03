<?php


Route::get('/', array('as' => 'home', 'uses' => 'home@index'));
Route::get('landlords_info', array('as' => 'landlord_info', 'uses' => 'home@landlord_info'));
Route::get('tenants_info', array('as' => 'tenant_info', 'uses' => 'home@tenant_info'));
Route::get('login', array('as' => 'login', 'uses' => 'users@login'));
Route::get('logout', array('as' => 'logout', 'uses' => 'users@logout'));
Route::get('signup', array('as' => 'signup', 'uses' => 'users@signup'));
Route::get('user', array('as' => 'account', 'uses' => 'users@index'));

Route::get('landlords', array('as' => 'landlords_home', 'before' => 'landlord_check', 'uses' => 'landlords@index'));
Route::get('documents', array('as' => 'documents', 'before' => 'landlord_check', 'uses' => 'documents@index'));
Route::get('document/(:num)', array('as' => 'document', 'before' => 'landlord_check', 'uses' => 'documents@show'));
Route::get('properties', array('as' => 'properties', 'before' => 'landlord_check', 'uses' => 'properties@index'));
Route::get('landlords/tenants', array('as' => 'all_tenants', 'before' => 'landlord_check', 'uses' => 'landlords@tenants'));

Route::get('tenants', array('as' => 'tenants_home', 'before' => 'auth', 'uses' => 'tenants@index'));
Route::get('tenants/documents', array('as' => 'tenant_documents', 'before' => 'auth', 'uses' => 'tenants@documents'));
// Route::get('tenants/document', array('as' => 'tenant_document', 'before' => 'auth', 'uses' => 'tenants@edit_document'));
Route::get('tenants/document/(:num)', array('as' => 'tenant_view_document', 'before' => 'auth', 'uses' => 'tenants@view_document'));

Route::post('tenants/create_document', array('as' => 'create_document', 'before' => 'auth', 'before' => 'csrf', 'uses' => 'tenants@create_document'));



Route::post('login', array('before' => 'csrf', 'uses' => 'users@login'));
Route::post('signup', array('before' => 'csrf', 'uses' => 'users@create'));

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Simply tell Laravel the HTTP verbs and URIs it should respond to. It is a
| breeze to setup your application using Laravel's RESTful routing and it
| is perfectly suited for building large applications and simple APIs.
|
| Let's respond to a simple GET request to http://example.com/hello:
|
|		Route::get('hello', function()
|		{
|			return 'Hello World!';
|		});
|
| You can even respond to more than one URI:
|
|		Route::post(array('hello', 'world'), function()
|		{
|			return 'Hello World!';
|		});
|
| It's easy to allow URI wildcards using (:num) or (:any):
|
|		Route::put('hello/(:any)', function($name)
|		{
|			return "Welcome, $name.";
|		});
|
*/


/*
|--------------------------------------------------------------------------
| Application 404 & 500 Error Handlers
|--------------------------------------------------------------------------
|
| To centralize and simplify 404 handling, Laravel uses an awesome event
| system to retrieve the response. Feel free to modify this function to
| your tastes and the needs of your application.
|
| Similarly, we use an event to handle the display of 500 level errors
| within the application. These errors are fired when there is an
| uncaught exception thrown in the application. The exception object
| that is captured during execution is then passed to the 500 listener.
|
*/

Event::listen('404', function()
{
	return Response::error('404');
});

Event::listen('500', function($exception)
{
	return Response::error('500');
});

/*
|--------------------------------------------------------------------------
| Route Filters
|--------------------------------------------------------------------------
|
| Filters provide a convenient method for attaching functionality to your
| routes. The built-in before and after filters are called before and
| after every request to your application, and you may even create
| other filters that can be attached to individual routes.
|
| Let's walk through an example...
|
| First, define a filter:
|
|		Route::filter('filter', function()
|		{
|			return 'Filtered!';
|		});
|
| Next, attach the filter to a route:
|
|		Route::get('/', array('before' => 'filter', function()
|		{
|			return 'Hello World!';
|		}));
|
*/

Route::filter('landlord_check', function()
{
	if(Auth::check()){
		if(Auth::user()->type != 'landlord') return Redirect::to_route('home');		
	} else {
		return Redirect::to_route('home');
	};

});

Route::filter('before', function()
{
	// Do stuff before every request to your application...
});

Route::filter('after', function($response)
{
	// Do stuff after every request to your application...
});

Route::filter('csrf', function()
{
	if (Request::forged()) return Response::error('500');
});

Route::filter('auth', function()
{
	if (Auth::guest()) return Redirect::to('login');
});