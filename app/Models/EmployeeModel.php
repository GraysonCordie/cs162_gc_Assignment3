<?php

namespace App\Models;

use CodeIgniter\Model;

class EmployeeModel extends Model
{
    protected $table = 'employee';
    protected $db;

    public function __construct(){
        parent::__construct();
        $this->db = \Config\Database::connect();
    }

    public function insert_employee($employee = array()){

    }

    public function delete_employee($id = 0){

    }

    public function get_employee($id = false){
        if(!$id){
            //if $id is false get all employees
            $sql = "SELECT * FROM " . $this->table;
            $query = $this->db->query($sql);
            return $query->getResult();
        }
        else{
            //otherwise get employee by id
            $query = $this->db->query("SELECT * FROM " . $this->table . " WHERE id='".$id."'");
            //SELECT * FROM employee WHERE id='1'
            return $query->getResult();
        }
    }
}