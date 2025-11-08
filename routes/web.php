<?php

use Illuminate\Support\Facades\Route;

RoutE::get('/', function(){

	return	view('welcome');
})