<?php
require_once("Core/dataBase.php");

class Validation extends DBH{
    function emptyData($data = array()){
        foreach ($data as $key => $value) {
            if(empty($value)){
                return false;
            }
        }
    }
    function sameData($data1, $data2){
        if($data1 !== $data2){
            return false;
        }
    }
    function sameDataInDB($table, $rows, $where, $data){
        $sameDataInDB = new Validation();  
        $sameDataInDB->select($table, $rows, $where);
        $row = mysqli_fetch_assoc($sameDataInDB->sql);

        if(is_array($row)){
            if($row[$rows] === $data){
                return false;
            }
        }
    }
    function checkEmail($data){
        if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
            return false;
        }
    }
    function checkMinLength($data, $length){
        if(strlen($data) < $length){
            return false;
        }
    }
    function checkMaxLength($data, $length){
        if(strlen($data) > $length){
            return false;
        }
    }
    function clearData($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $validation = new DBH();
        $data = $validation->connected()->real_escape_string($data);
        return $data;
    }
}
?>