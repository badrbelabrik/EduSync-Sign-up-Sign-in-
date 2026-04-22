<?php

function emptyInputSignup($firstname,$lastname,$email,$password,$confirmpassword){
    $result = null;
    if(empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidFirstname($firstname){
    $result = null;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$firstname)){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function invalidLastname($lastname){
    $result = null;
    if(!preg_match("/^[a-zA-Z0-9]*$/",$lastname)){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function invalidEmail($email){
    $result = null;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function passwordMisMatch($pwd,$pwdRepeat){
    $result = null;
    if($pwd !== $pwdRepeat){
        $result = true;
    } else{
        $result = false;
    }
    return $result;
}

function userExists($con, $firstname, $lastname, $email){
    $query = "SELECT * FROM users WHERE firstname = ? OR lastname = ? OR email = ?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$query)){
        header("location: ../public/register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "sss", $firstname , $lastname, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        return $row;
    } else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}

function createUser($con, $firstname, $lastname, $email, $password){
    $query = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$query)){
        header("location: ../public/register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $firstname , $lastname, $email, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../public/register.php?error=none");
    exit();
}