<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: Index.php');
    exit;
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Magazin Alimentar</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <h1>Magazin Alimentar</h1>
            <a href="Profile.php" style="font-size: 21px;"><i class="fas fa-usercircle"></i>Profile</a>
            <a href="magazin.php" style="font-size: 21px;"><i class="fas fa-sign-outalt"></i>Magazin</a>
            <a href="logout.php" style="font-size: 21px;"><i class="fas fa-sign-outalt"></i>Logout</a>

        </div>
    </nav>
    
    <div class="content">
        <p style="font-size: 21px;">Bine ati revenit, <?= $_SESSION['name'] ?>!</p>
    </div>
</body>

</html>