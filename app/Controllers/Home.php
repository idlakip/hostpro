<?php

namespace App\Controllers;
use App\Models\ModelKantor;

class Home extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->ModelKantor = new ModelKantor();
	}

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
		return view('table', $data);
	}

	//--------------------------------------------------------------------
	public function map()
	{
		$data = [
			'title' => 'Map',
			'kantor' => $this->ModelKantor->get_all_data(),
			'name' => 'Masrianto'
		];
		return view('map', $data);
	}

	//--------------------------------------------------------------------

	public function charts()
	{
		$data = [
			'title' => 'Charts',
			'name' => 'Masrianto'
		];
		return view('charts', $data);
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
