<?php

class Validation {

    static function emptyData($array = [])
    {
        foreach ($array as $item)
        {
            empty($item) ? false : true;
        }
    }

    static function checkLength($item, $min, $max)
    {
        strlen($item) < $min || strlen($item) > $max ? var_dump(false) : var_dump(true);
    }

    static function sameData($item1, $item2)
    {
        $item1 !== $item2 ? var_dump(false) : var_dump(true);
    }
    

    // static function sameDataInDB()
    // {
    //      future
    // }
    
    // function checkEmail($data)
    // {
    //     future
    //     if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
    //         return false;
    //     }
    // }


    // function clearData($data){
    //     $data = trim($data);
    //     $data = stripslashes($data);
    //     $data = htmlspecialchars($data);
    //     $validation = new DBH();
    //     $data = $validation->connected()->real_escape_string($data);
    //     return $data;
    // }
}
?>