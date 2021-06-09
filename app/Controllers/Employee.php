<?php

namespace App\Controllers;
use App\Models\EmployeeModel;

class Employee extends BaseController
{
    private $employeeModel;
    private $employeeFields;
    //$data['employeeFields'] = $employeeFields; <- used for passing into a view
    
    public function __construct(){
        $this->employeeModel = new EmployeeModel();
        $this->employeeFields = $this->employeeModel->get_columnNames();
    }

    public function view($seg1 = false){
        $data['pageTitle'] = "View Employees";
        $employees = $this->employeeModel->get_employee($seg1);
        $data['employees'] = $employees;

        echo view('templates/header.php', $data);
        echo view('employee/view.php', $data);
        echo view('templates/footer.php');
    }

    public function create(){
        $data['pageTitle'] = "Create Employee";
        $data['formFields'] = $this->employeeFields;

        echo view('templates/header.php', $data);
        echo view('employee/create.php');
        echo view('templates/footer.php');
    }

    public function update(){
        $data['pageTitle'] = "Update Employee";

        echo view('templates/header.php', $data);
        echo view('employee/update.php');
        echo view('templates/footer.php');
    }

    public function delete(){
        $data['pageTitle'] = "Delete Employee";

        echo view('templates/header.php', $data);
        echo view('employee/delete.php');
        echo view('templates/footer.php');
    }
}