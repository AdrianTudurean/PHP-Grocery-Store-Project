<?php
session_start();

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = "";
$DATABASE_NAME = 'magazin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Conectare eșuată la MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Completați ambele câmpuri username și password !');
}
if ($stmt = $con->prepare('SELECT client_id, client_pass FROM clienti WHERE client_username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();

	if ($stmt->num_rows > 0) {
	$stmt->bind_result($client_id, $password);
	$stmt->fetch();
		if (password_verify($_POST['password'], $password)) {
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['client_id'] = $client_id;
		echo 'Bine ați venit! ' . $_SESSION['name'] . '!';
		header('Location: home.php');
	} else {
	echo 'Username si/sau password incorect!';
	}
} else {
	echo 'Username si/sau password incorect!';
}
	$stmt->close();
}
