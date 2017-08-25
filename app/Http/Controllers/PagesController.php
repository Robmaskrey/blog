<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	public function getIndex() {
		return view('pages.welcome');
		#process variable data or params
		#talk to the model
		#revieve from the model
		#compile or process data from the model if needed
		#pass that data to the correct view
	}

	public function getAbout() {
		$first = 'Boo';
		$last = "Maskrey";

		$fullname = $first . " " . $last;
		$email = 'robmaskrey@gmail.com';
		return view('pages.about')->withFullname($fullname)->withEmail($email);
	}

	public function getContact() {
		return view('pages.contact');
	}

}