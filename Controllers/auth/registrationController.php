<?php

// require("Core/Database.php");

// require("Core/auth/registrationLogic.php");

require("public/views/auth/registration.view.php");

// $new = new RegistrationLogic();
// $new->checkForm($formData);

// session_start();

// require("Core/validation.php");

// class RegistrationController extends DBH{

//     public function AddUser(){
//         if(isset($_POST['registration'])){
//             $tableValues=[
//                 'username' => $_POST['username'],
//                 'email' => $_POST['email'],
//                 'password' => $_POST['password'],
//                 'repassword' => $_POST['repassword']
//             ];

//             $validation = new Validation();


//             if($validation->emptyData($tableValues) === false)
//             {
//                 $_SESSION["error"] = 'emptyFormData';
//             }
//             else if($validation->checkMinLength($tableValues['username'], 3) === false){
//                 $_SESSION["error"] = 'minLegnthUserName';
//             }
//             else if($validation->checkMaxLength($tableValues['username'], 12) === false ){
//                 $_SESSION["error"] = 'maxLegnthUserName';
//             }
//             else if($validation->sameDataInDB('user', 'username', "username = '{$tableValues['username']}'", $tableValues['username']) === false)
//             {
//                 $_SESSION["error"] = 'sameUserNameInDb';
//             }
//             else if($validation->checkEmail($tableValues['email']) === false)
//             {
//                 $_SESSION["error"] = 'checkFormatEmail';
//             }
//             else if($validation->sameDataInDB('user', 'email', "email = '{$tableValues['email']}'", $tableValues['email']) === false)
//             {
//                 $_SESSION["error"] = 'sameEmailInDb';
//             }
//             else if($validation->checkMinLength($tableValues['password'], 8) === false){
//                 $_SESSION["error"] = 'minLegnthPassword';
//             }
//             else if($validation->checkMinLength($tableValues['repassword'], 8) === false){
//                 $_SESSION["error"] = 'minLegnthPassword';
//             }
//             else if($validation->checkMaxLength($tableValues['password'], 20) === false ){
//                 $_SESSION["error"] = 'maxLegnthPassword';
//             }
//             else if($validation->checkMaxLength($tableValues['repassword'], 20) === false ){
//                 $_SESSION["error"] = 'maxLegnthPassword';
//             }
//             else if($validation->sameData($tableValues['password'], $tableValues['repassword']) === false)
//             {  
//                 $_SESSION["error"] = 'samePassword';
//             }
//             else{
//                 $username = $validation->clearData($_POST['username']);
//                 $email = $validation->clearData($_POST['email']);
//                 $password = $validation->clearData($_POST['password']);
//                 $passwordHash = password_hash($password, PASSWORD_DEFAULT);
                
//                 $newUser = new DBH();
//                 $newUser->insert('user', ['username'=>$username, 'email'=>$email, 'password'=>$passwordHash]);
//                 header('location: /login');
//             }
//         }
//     }  
// }
// $newUser = new RegistrationController();
// $newUser->AddUser();