<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	
	public function getIndex() {
		return view('welcome');	
	}
	
	public function getAbout() {
		$first = 'Cyril';
		$last = 'Lihotin';
		$fullname = $first . ' ' . $last;
		return view('about', compact('fullname'));
	}
	
	public function getContact() {
		$email = 'kirill.lihotin@gmail.com';
		return view('contact', compact('email'));	
	}
	public function getReviews() {
		return view('reviews');
	}
	public function getSelfdevelopment() {
		return view('selfdevelopment');
	}
}