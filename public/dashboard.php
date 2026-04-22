<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}
?>
<?php include '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="min-h-screen flex flex-col justify-center items-center">
            <h1 class="text-blue-500 text-2xl font-bold">WELCOME TO THE DASHBOARD</h1>
            <p>user id: <?php echo $_SESSION['userid']; ?></p>
            <p>username: <?php echo $_SESSION['firstname'] .' '. $_SESSION['lastname']; ?></p>
            <p>email: <?php echo $_SESSION['email']; ?></p>
    
    </main>
<?php include '../includes/footer.php'; ?>