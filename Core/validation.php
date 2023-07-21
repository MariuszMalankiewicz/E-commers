<?php


// przy wyświetlaniu uzywać 

// htmlspecialchars($data);

// $data = stripslashes($data);

// $data = $validation->connected()->real_escape_string($data);

class Validation {

    public static function trimData(array $array = [])
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

}

?>