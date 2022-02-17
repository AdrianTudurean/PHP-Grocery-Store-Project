<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'magazin';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Eec conectare MySQL: ' . mysqli_connect_error());
}
if (!isset($_POST['username'], $_POST['password'])) {
    exit("Completați username și parolă !");
}
if ($stmt = $con->prepare('SELECT id, password FROM utilizatori WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $password);
        $stmt->fetch();
        if (password_verify($_POST['password'], $password)) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            echo 'Bine ați venit' . $_SESSION['name'] . '!';
            header('Location: Vizualizare.php');
        } else {

            echo 'Username sau parola incorectă!';
        }
    } else {

        echo 'Username sau parola incorectă!';
    }
    $stmt->close();
}
