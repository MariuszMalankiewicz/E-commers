<?php


class Validation {

    static function emptyData($array = [])
    {
        foreach ($array as $item)
        {
            (empty($item)) ? var_dump(false) : var_dump(true);
        }
    }

    static function sameData($item1, $item2)
    {
        ($item1 !== $item2) ? var_dump(false) : var_dump(true);
    }
    
    static function checkLength($item, $min, $max)
    {
        (strlen($item) < $min) || (strlen($item) > $max) ? var_dump(false) : var_dump(true);
    }


    static function sameDataInDB($config)
    {
        $sameDataInDB = new Database($config['database']);
        // var_dump($sameDataInDB->query("SELECT email FROM `user` WHERE email = ':email'", ['email' => $email])->fetch());
        $sameDataInDB->query("SELECT email FROM user WHERE email = 'test@test.com'")->fetch();
        
        // $sameDataInDB->select($table, $rows, $where);
        // $row = mysqli_fetch_assoc($sameDataInDB->sql);

        // if(is_array($row)){
            // if($row[$rows] === $data){
                // return false;
            // }
        // }
    }
    


    // function checkEmail($data){
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