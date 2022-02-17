<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: Index.html');
    exit;
}
include("Conectare.php");
$error = '';
if (isset($_POST['submit'])) {
    $produs_nume = htmlentities($_POST['produs_nume'], ENT_QUOTES);
    $produs_pret = htmlentities($_POST['produs_pret'], ENT_QUOTES);
    $produs_img = htmlentities($_POST['produs_img'], ENT_QUOTES);
    $produs_categ = htmlentities($_POST['produs_categ'], ENT_QUOTES);
    $produs_descriere = htmlentities($_POST['produs_descriere'], ENT_QUOTES);
    $produs_desccompl = htmlentities($_POST['produs_desccompl'], ENT_QUOTES);
    if ($produs_nume == '' || $produs_pret == '' || $produs_img == '' || $produs_categ == '' || $produs_descriere == '' || $produs_desccompl == '') {
        $error = 'ERROR: Câmpuri goale!';
    } else {

        if ($stmt = $mysqli->prepare("INSERT into produse (produs_nume, produs_pret, produs_img, produs_categ, produs_descriere, produs_desccompl) VALUES (?, ?, ?, ?, ?, ?)")) {
            $stmt->bind_param("sdssss", $produs_nume, $produs_pret, $produs_img, $produs_categ, $produs_descriere, $produs_desccompl);
            $stmt->execute();
            $stmt->close();
        } else {
            echo "ERROR: Nu se poate executa inserarea.";
        }
    }
}
$mysqli->close();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>

<head>
    <title><?php echo "Inserare înregistrare nouă"; ?> </title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        input {
            border-radius: 20px;
            font-family: Fjalla One;
            font-size: 20px;
        }

        a {
            font-weight: bold;
            font-size: 20px;
        }

        div {
            margin: auto;
            width: 300px;
            font-size: 13px;
            font-family: ui-sans-serif;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <h1><?php echo "Inserare înregistrare nouă"; ?></h1>
    <?php if ($error != '') {
        echo "<div style='padding:6px; border:3px solid;'>" . $error . "</div>";
    } ?>
    <form action="" method="post">
        <div>
            <strong>Nume produs: </strong></br><input type="text" name="produs_nume" value="" /><br />
            <strong>Preț produs: </strong></br> <input type="text" name="produs_pret" value="" /><br />
            <strong>Imagine produs: </strong></br> <input type="text" name="produs_img" value="" /><br />
            <strong>Categorie produs: </strong></br> <input type="text" name="produs_categ" value="" /> <br />
            <strong>Descriere produs: </strong></br> <input type="textarea" name="produs_descriere" value="" /> <br />
            <strong>Descriere completă: </strong></br> <input type="textarea" name="produs_desccompl" value="" /> <br />
            <input type="submit" name="submit" value="Submit" />
            <a href="Vizualizare.php">Index</a>
        </div>
    </form>
</body>

</html>