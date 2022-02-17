<?php
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: Index.html');
    exit;
}
include("Conectare.php");
$error = "";
if (!empty($_POST['id'])) {
    if (isset($_POST['submit'])) {
        if (is_numeric($_POST['id'])) {
            $id = $_POST['id'];
            $produs_nume = htmlentities($_POST['produs_nume'], ENT_QUOTES);
            $produs_pret = htmlentities($_POST['produs_pret'], ENT_QUOTES);
            $produs_img = htmlentities($_POST['produs_img'], ENT_QUOTES);
            $produs_categ = htmlentities($_POST['produs_categ'], ENT_QUOTES);
            $produs_descriere = htmlentities($_POST['produs_descriere'], ENT_QUOTES);
            $produs_desccompl = htmlentities($_POST['produs_desccompl'], ENT_QUOTES);;
            if ($produs_nume == '' || $produs_pret == '' || $produs_img == '' || $produs_categ == '' || $produs_descriere == '' || $produs_desccompl == '') {
                echo "<div> ERROR: Completați câmpurile obligatorii!</div>";
            } else {
                if ($stmt = $mysqli->prepare("UPDATE produse SET produs_nume=?,produs_pret=?,produs_img=?,produs_categ=?,produs_descriere=?,produs_desccompl=? WHERE produs_id='" . $id . "'")) {
                    $stmt->bind_param("sdssss", $produs_nume, $produs_pret, $produs_img, $produs_categ, $produs_descriere, $produs_desccompl);;
                    $stmt->execute();
                    $stmt->close();
                } else {
                    echo "ERROR: nu se poate executa modificarea.";
                }
            }
        } else {
            echo "id incorect!";
        }
    }
} ?>
<html>

<head>
    <title> <?php if ($_GET['id'] != '') {
                echo "Modificare înregistrare";
            } ?></title>
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

        p {
            font-size: 20px;
            font-weight: bold;
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
    <h1><?php if ($_GET['id'] != '') {
            echo "Modificare  înregistrare";
        } ?></h1>
    <?php if ($error != '') {
        echo "<div>" . $error . "</div>";
    } ?>
    <form action="" method="post">
        <div>
            <?php if ($_GET['id'] != '') { ?>
                <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" />
                <p>ID: <?php echo $_GET['id'];
                        if ($result = $mysqli->query("SELECT * FROM produse where produs_id='" . $_GET['id'] . "'")) {
                            if ($result->num_rows > 0) {
                                $row = $result->fetch_object(); ?></p>
                <strong>Nume produs: </strong></br> <input type="text" name="produs_nume" value="<?php echo $row->produs_nume; ?>" /><br />
                <strong>Preț produs: </strong></br> <input type="text" name="produs_pret" value="<?php echo $row->produs_pret; ?>" /><br />
                <strong>Imagine produs: </strong></br> <input type="text" name="produs_img" value="<?php echo $row->produs_img; ?>" /><br />
                <strong>Categorie produs: </strong></br> <input type="text" name="produs_categ" value="<?php echo $row->produs_categ; ?>" /> <br />
                <strong>Descriere produs: </strong></br> <input type="textarea" name="produs_descriere" value="<?php echo $row->produs_descriere; ?>" /> <br />
                <strong>Descriere completă: </strong></br> <input type="textarea" name="produs_desccompl" value="<?php echo $row->produs_desccompl;
                                                                                                                }
                                                                                                            }
                                                                                                        } ?>" /> <br />
                <input type="submit" name="submit" value="Submit" />
                <a href="Vizualizare.php">Index Produse</a>
        </div>
    </form>
</body>

</html>