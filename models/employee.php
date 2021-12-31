<?php
class Employee
{
    public $id;
    public $name;
    public $email;

    function __construct($id, $name, $email)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
    }

    static function consult()
    {
        $employeesList = [];
        $connection = Connection::createInstance();
        $sql = $connection->query("select * from employees");
        foreach ($sql->fetchAll() as $employee) {
            $employeesList[] = new Employee($employee['id'], $employee['name'], $employee['email']);
        }
        return $employeesList;
    }

    static function create($name, $email)
    {
        $connection = Connection::createInstance();
        $sql = $connection->prepare("INSERT INTO employees (name, email) VALUES (?,?)");
        $sql->execute(array($name, $email));
    }

    static function delete($id)
    {
        $connection = Connection::createInstance();
        $sql = $connection->prepare("DELETE FROM employees WHERE id=?");
        $sql->execute(array($id));
    }

    static function search($id)
    {
        $connection = Connection::createInstance();
        $sql = $connection->prepare("SELECT * FROM employees WHERE id=?");
        $sql->execute(array($id));
        $emp = $sql->fetch();
        return new Employee($emp['id'], $emp['name'], $emp['email']);
    }
}
