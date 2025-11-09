<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){

	return	view('home', [
		"jobs" => [

			[
				'title' => 'Director',
				'salary' => '50,000'


			]

		]
})

Route::get('/about', function(){

	return	view('about');
})

Route::get('/contact', function(){

	return	view('contact');
})