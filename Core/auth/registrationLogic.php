<?php

$formData = require("formData.php");

require("Core/validation.php");

class RegistrationLogic{

    public function checkForm($formData)
    {
        if(isset($_POST['registration']))
        {
            Validation::emptyData($formData) === null ? print("test 1 error") : print("test 1 pass");
            Validation::sameData($formData['password'], $formData['repassword']);
            Validation::checkLength($formData['username'], 4, 10);
        }

    }


    // public function AddUser($formData)
    // {

    // }
}