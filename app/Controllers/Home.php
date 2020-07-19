<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home',
			'name' => 'Masrianto'
		];
		return view('home', $data);
	}

	//--------------------------------------------------------------------

	public function table()
	{
		$data = [
			'title' => 'Tabel',
			'name' => 'Masrianto'
		];
		return view('home', $data);
	}

	//--------------------------------------------------------------------
	public function map()
	{
		$data = [
			'title' => 'Map',
			'name' => 'Masrianto'
		];
		return view('home', $data);
	}

	//--------------------------------------------------------------------

	public function charts()
	{
		$data = [
			'title' => 'Charts',
			'name' => 'Masrianto'
		];
		return view('home', $data);
	}

	//--------------------------------------------------------------------


	public function contact()
	{
		$data = [
			'title' => 'Home',
			'name' => 'Masrianto'
		];
		return view('home', $data);
	}

	//--------------------------------------------------------------------

	public function about()
	{
		$data = [
			'title' => 'About',
			'name' => 'User',
			'isi' => 'about'
		];
		echo view('layout/templates', $data); // templates 2
	}
}
