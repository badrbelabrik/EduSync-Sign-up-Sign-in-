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

function userExists($con,$email){
    $query = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$query)){
        header("location: ../public/register.php?error=stmtfailed");
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)){
        mysqli_stmt_close($stmt);
        return $row;
    } else{
        $result = false;
        mysqli_stmt_close($stmt);
        return $result;
    }
    
}

function createUser($con, $firstname, $lastname, $email, $password, $role){
    $query = "INSERT INTO users (firstname, lastname, email, password, id_role) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($con);
    if(!mysqli_stmt_prepare($stmt,$query)){
        header("location: ../public/register.php?error=stmtfailed");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssi", $firstname , $lastname, $email, $hashedPwd, $role);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../public/register.php?error=none");
    exit();
}

function emptyInputLogin($email,$password){
    $result = null;
    if(empty($email) || empty($password)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function loginUser($con,$email,$password){
    $userExist = userExists($con,$email);
    if($userExist === false){
        header("location: ../public/login.php?error=invalidcredentials");
        exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
}