<?php
require_once("../includes/connection.php");
session_start();
require_once("../includes/functions.php");

function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

if(isset($_POST['registration'])){
    $firstname = sanitize($_POST['firstname'] ?? '');
    $lastname = sanitize($_POST['lastname'] ?? '');
    $email = sanitize($_POST['email'] ?? '');
    $password = sanitize($_POST['password']);
    $confirmPassword = sanitize($_POST['confirmpassword']);

    if (emptyInputSignup($firstname,$lastname,$email,$password,$confirmPassword)) {
        header("location: ../public/register.php?error=emptyinput");
        exit();
    }

    if(invalidFirstname($firstname)){
        header("location: ../public/register.php?error=invalidfirstname");
        exit();
    }
    if(invalidLastname($lastname)){
        header("location: ../public/register.php?error=invalidlastname");
        exit();
    }

    if(invalidEmail($email)){
        header("location: ../public/register.php?error=invalidemail");
        exit();
    }

    if(passwordMisMatch($password,$confirmPassword)){
        header("location: ../public/register.php?error=passwordconfirmationmismatch");
        exit();
    }

    if(userExists($con,$email) !== false){
        header("location: ../public/register.php?error=useralreadyexist");
        exit();
    } else{
        createUser($con,$firstname,$lastname,$email,$password,3);
    }

}

?>