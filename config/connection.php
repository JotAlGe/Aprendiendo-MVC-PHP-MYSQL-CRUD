<?php
class Connection
{
    private static $instance = null;
    static function createInstance()
    {
        if (!isset(self::$instance)) {
            $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$instance = new PDO('mysql:host=localhost;dbname=employees', 'root', '1234', $optionsPDO);
            # echo 'conexión ok!';
        }
        return self::$instance;
    }
}
