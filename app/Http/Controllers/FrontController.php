<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
	public function index () {
		$sub_title = 'Indonesia Fundraising Platform';
		return view('pages.home.index', compact('sub_title'));
	}
}
