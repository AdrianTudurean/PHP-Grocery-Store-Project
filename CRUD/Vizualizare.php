<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: Index.html');
    exit;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <title>Vizualizare înregistrări</title>
    <meta http-equiv="Content-Type" content="text/html; char-set=utf-8" />

</head>

<body>
    <h1>Înregistrarile din tabela Produse</h1>
    <p><b>Toate înregistrările din tabela Produse</b></p>
    <?php
    include("Conectare.php");
    if ($result = $mysqli->query("SELECT * FROM produse ORDER BY produs_id ")) {
        if ($result->num_rows > 0) {
            echo "<table border='2' cellpadding='20'>";
            echo "<tr><th>ID produs</th><th>Nume produs</th><th>Preț produs</th><th>Imagine produs</th><th>Categorie produs</th><th>Descriere</th><th>Descriere completă</th><th>Operații de modificare</th><th>Operații de ștergere</th><th>Operatii de adaugare</th></tr>";
            while ($row = $result->fetch_object()) {
                echo "<tr>";
                echo "<td>" . $row->produs_id . "</td>";
                echo "<td>" . $row->produs_nume . "</td>";
                echo "<td>" . $row->produs_pret . "</td>";
                echo "<td>" . $row->produs_img . "</td>";
                echo "<td>" . $row->produs_categ . "</td>";
                echo "<td>" . $row->produs_descriere . "</td>";
                echo "<td>" . $row->produs_desccompl . "</td>";
                echo "<td><a href='Modificare.php?id=" . $row->produs_id . "'>Modificare</a></td>";
                echo "<td><a href='Stergere.php?id=" . $row->produs_id . "'>Stergere</a></td>";
                echo "<td><a href='Adaugare.php?id=" . $row->produs_id . "'>Adaugare</a></td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "Nu există Înregistrari în tabela Produse!";
        }
    } else {
        echo "Error: " . $mysqli->error();
    }

    $mysqli->close();
    ?>
    <a href="Inserare.php" style="font-size:20px;font-weight:bold;">Adaugărea unei noi înregistrări</a>
</body>

</html>