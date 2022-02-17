<html>

<head>
    <style>
        div {
            font-weight: bold;
            font-size: 40px;
        }

        p {
            font-weight: bold;
            font-size: 20px;
        }
    </style>
</head>

</html>
<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: Index.html');
    exit;
}
include("Conectare.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    if ($stmt = $mysqli->prepare("DELETE FROM produse WHERE produs_id = ? LIMIT 1")) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    } else {
        echo "ERROR: Nu se poate executa ștergerea produsului.";
    }
    $mysqli->close();
    echo "<div>Înregistrarea a fost ștearsă cu succes!</div>";
}
echo "<p><a href=\"Vizualizare.php\">Index Produse</a></p>";
?>