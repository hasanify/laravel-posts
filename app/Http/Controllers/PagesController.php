<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function index()
	{
		$title = 'Posts-Project | Home';
		return view('pages.index')->with('title', $title);
	}

	public function about()
	{
		$title = 'Posts-Project | About';
		return view('pages.about')->with('title', $title);
	}
	
	public function services()
	{
		$data = array(
			'title' => 'Posts-Project | Services',
			'services' => ['Web Design', 'Programming', 'SEO']

		);
		return view('pages.services')->with($data);
	}

	public function users()
	{
		$data = array(
			'title' => 'Posts-Project | Users',
			'users' => ['Hasan', 'Haider', 'Ahad', 'Arsalan']
		);
		return view('pages.users')->with($data);
	}
}
