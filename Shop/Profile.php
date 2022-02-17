<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
  header('Location: Index.html');
  exit;
}
?>

<!DOCTYPE html>
<html>

<body>
  <p style="font-size:42px">Bine ati revenit, <?= $_SESSION['name'] ?>!</p>

  <p style="color: orangered;"><b>Incarca o poza pentru profilul tau!!</b></p>

  <form action="/action_page.php">
    <input type="file" id="myFile" name="filename">
    <input type="submit">
  </form>

</body>

</html>