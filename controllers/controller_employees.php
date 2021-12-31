<?php
include_once 'models/employee.php';
include_once 'config/connection.php';

class ControllerEmployees
{
    function index()
    {
        $employees = Employee::consult();
        include_once 'views/employees/index.php';
    }
    function create()
    {
        if ($_POST) {
            print_r($_POST);
            $name = $_POST['name'];
            $email = $_POST['email'];
            Employee::create($name, $email);
            header('Location:?controller=employees&action=index');
        }
        include_once 'views/employees/create.php';
    }
    function edit()
    {
        $employee = Employee::search($_GET['id']);
        include_once 'views/employees/edit.php';
    }

    function delete()
    {
        Employee::delete($_GET['id']);
        header('Location:?controller=employees&action=index');
    }
}
