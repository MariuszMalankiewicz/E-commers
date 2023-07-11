<?php

class RegistrationLogic{

    public function AddUser(){
        if(isset($_POST['registration'])){
            $tableValues=[
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'repassword' => trim($_POST['repassword'])
            ];

            
            echo "-->> Test 1".Validation::emptyData($tableValues)."<br>";
            echo "-->> Test 2".Validation::sameData($tableValues['password'], $tableValues['repassword'])."<br>";
            echo "-->> Test 3".Validation::checkLength($tableValues['username'], 4, 10)."<br>";
            echo "-->> Test 4".Validation::sameDataInDB()."<br>";
            
        }

    
    }
}