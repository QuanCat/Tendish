<?php

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
	));
	
Route::get('/emails/email', array(
	'as' => 'email',
	'uses' => 'HomeController@getEmail'
	));
	
Route::get('/email/{name}/{email}/{subject}', array(
		'as' => 'send-email',
		'uses' => 'PromotionController@sendEmail'
	));

Route::group(array('before' => 'guest'), function () {

	Route::group(array('before' => 'csrf'), function() {

		Route::post('/account/create', array(
		'as' => 'account-create-post',
		'uses' => 'AccountController@postCreate'
		));

		Route::post('/account/signin', array(
			'as' => 'account-sign-in-post',
			'uses' => 'AccountController@postSignIn'
		));

	});

	Route::get('/account/signin', array(
			'as' => 'account-sign-in',
			'uses' => 'AccountController@getSignIn'
		));

	Route::get('/account/create', array(
		'as' => 'account-create',
		'uses' => 'AccountController@getCreate'
		));

	Route::get('/account/activate/{code}', array(
			'as' => 'account-activate',
			'uses' => 'AccountController@getActivate'
		));

});
	
Route::get('/blog', array(
	'as' => 'blog',
	'uses' => 'HomeController@blog'
	));

Route::get('/about-us', array(
	'as' => 'about',
	'uses' => 'HomeController@about'
	));

Route::any('/contact-us', array(
	'as' => 'contact',
	'uses' => 'HomeController@contact'
	));

Route::any('/service', array(
	'as' => 'service',
	'uses' => 'HomeController@service'
	));

Route::any('/features', array(
	'as' => 'features',
	'uses' => 'HomeController@features'
	));

Route::any('/product', array(
	'as' => 'product',
	'uses' => 'HomeController@product'
	));

Route::any('/portfolio', array(
	'as' => 'portfolio',
	'uses' => 'HomeController@portfolio'
	));

Route::any('/testimonials', array(
	'as' => 'testimonials',
	'uses' => 'HomeController@testimonials'
	));

Route::any('/pricing', array(
	'as' => 'pricing',
	'uses' => 'HomeController@pricing'
	));