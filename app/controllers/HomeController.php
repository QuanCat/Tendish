<?php

class HomeController extends BaseController {
	public function home() {
		return View::make('home');
	}
	
	public function getEmail()
	{
		Redirect::route('home');
	}
	
	public function blog() {
		return View::make('blog');
	}

	public function about() {
		return View::make('about');
	}

	public function contact() {
		return View::make('contact');
	}

	public function service() {
		return View::make('service');
	}

	public function features() {
		return View::make('features');
	}

	public function product() {
		return View::make('product');
	}

	public function portfolio() {
		return View::make('portfolio');
	}

	public function testimonials() {
		return View::make('testimonials');
	}

	public function pricing() {
		return View::make('pricing');
	}
}
