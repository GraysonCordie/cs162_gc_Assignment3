<?php

namespace App\Controllers;
use App\Models\EmployeeModel;

class Home extends BaseController
{
	public function index()
	{
		$employeeModel = new EmployeeModel();
		$employees = $employeeModel->get_employee(7);

		$data['whateverName'] = "Hello World!";
		$data['page_title'] = "My Page Title";
		$data['alert'] = true;
		$data['employees'] = $employees;

		return view('my_welcome_message', $data);
	}
}
