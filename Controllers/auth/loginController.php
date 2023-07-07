<?php
require("views/auth/login.view.php");

// session_start();

// require("Core/validation.php");

// class LoginController extends DBH{
//     public function logIn(){
//         if (isset($_POST['logIn'])) {
//             $tableValues=[
//                 'email' => $_POST['email'],
//                 'password' => $_POST['password']
//             ];

//             $validation = new Validation();

//             if ($validation->emptyData($tableValues) === false) 
//             {
//                 $_SESSION["error"] = 'emptyFormData';
//             }
//             else if($validation->checkMinLength($tableValues['password'], 8) === false){
//                 $_SESSION["error"] = 'minLegnthPassword';
//             }
//             else if($validation->checkMaxLength($tableValues['password'], 20) === false ){
//                 $_SESSION["error"] = 'maxLegnthPassword';
//             }
//             else if($validation->sameDataInDB('user', 'email', "email = '{$tableValues['email']}'", $tableValues['email']) !== false)
//             {
//                 $_SESSION["error"] = 'uncorrectEmailOrPassword';
//             }
//             else if($validation->checkEmail($tableValues['email']) === false)
//             {
//                 $_SESSION["error"] = 'checkFormatEmail';
//             }
//             else
//             {
//                 $validation->select('user','password', "email = '{$tableValues['email']}'");
//                 $row = mysqli_fetch_assoc($validation->sql);
//                 $formPassword = $tableValues['password'];
//                 $dbPassword = $row['password'];
    
//                 if(password_verify($formPassword, $dbPassword)) 
//                 {
//                     header('location: /dashboards');
//                 }
//                 else
//                 {
//                     $_SESSION["error"] = 2;
//                 }
//             }
//         }
//     }
// }
// $login = new LoginController();
// $login->logIn();