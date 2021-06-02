<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data['pageTitle'] = "Welcome to our Company Website!";

		echo view('Templates/header', $data);
		echo view('home');
		echo view('Templates/footer');
	}

}
