<?php

class Validation {

    public static function trimData(array $array = []) : string
    {
        foreach ($array as $data)
        {
            $data = trim($data);

            return $data;
        }
    }

    public static function strlenString(string $data, int $min, int $max)
    {
        return strlen($data) < $min || strlen($data) > $max;
    }

    public static function validEmail(string $data)
    {
        return filter_var($data, FILTER_VALIDATE_EMAIL);
    }

    public static function differentData(string $item1, string $item2)
    {
        return $item1 !== $item2;
    }
    
    public static function sameDataInDb(string $data)
    {
        $config = require("config.php");

        $dbh = new Database($config['database']);

        return $dbh->query("SELECT email FROM `user` WHERE email = :data", [':data' => $data])->fetch();
    }

    public static function passwordVerify(string $data1, string $data2) : bool
    {
        $config = require("config.php");

        $dbh = new Database($config['database']);

        $passwordHash = $dbh->query("SELECT password FROM `user` WHERE email = :data", [':data' => $data1])->fetch();

        if(isset($passwordHash['password']))
        {
            return password_verify($data2, $passwordHash['password']);
        }
        else
        {
            return false;
        }
        
    }

}

?>