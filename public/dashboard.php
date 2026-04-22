<?php
session_start();
if (!isset($_SESSION['userid'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main class="min-h-screen flex flex-col justify-center items-center">
            <p>user id: <?php echo $_SESSION['userid']; ?></p>
            <p>username: <?php echo $_SESSION['firstname'] .' '. $_SESSION['lastname']; ?></p>
            <p>email: <?php echo $_SESSION['email']; ?></p>
    
    </main>
</body>
</html>