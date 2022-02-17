<?php
require_once "ShoppingCart.php";
session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: Index.html');
    exit;
}

$member_id = $_SESSION['loggedin'];
$shoppingCart = new ShoppingCart();
if (!empty($_GET["action"])) {
    switch ($_GET["action"]) {
        case "add":
            if (!empty($_POST["quantity"])) {

                $productResult = $shoppingCart->getProductByCode($_GET["code"]);
                $cartResult = $shoppingCart->getCartItemByProduct($productResult[0]["produs_id"], $member_id);
                if (!empty($cartResult)) {
                    $newQuantity = $cartResult[0]["cantitate"] + $_POST["quantity"];
                    $shoppingCart->updateCartQuantity($newQuantity, $cartResult[0]["cos_id"]);
                } else {
                    $shoppingCart->addToCart($productResult[0]["produs_id"], $_POST["quantity"], $member_id);
                }
            }
            break;
        case "remove":
            $shoppingCart->deleteCartItem($_GET["id"]);
            break;
        case "empty":
            $shoppingCart->emptyCart($member_id);
            break;
    }
}
?>
<hrml>

    <head>
        <title>Coș cumpărături</title>
    </head>

    <body>
        <div>

            <h1>Coș cumpărături</h1>

            <?php
            $cartItem = $shoppingCart->getMemberCartItem($member_id);
            if (!empty($cartItem)) {
                $item_total = 0;
            ?>
                <table cellpadding="20" cellspacing="1">
                    <tbody>
                        <tr style="border-bottom:black 2px solid;">
                            <th style="text-align: left; font-size:20px;"><strong>Nume produs</strong></th>
                            <th style="text-align: left; font-size:20px;"><strong>Categorie</strong></th>
                            <th style="text-align: left; font-size:20px;"><strong>Cantitate</strong></th>
                            <th style="text-align: left; font-size:20px;"><strong>Preț</strong></th>
                            <th style="text-align: left; font-size:20px;"><strong>Ștergere</strong></th>
                        </tr>
                        <?php
                        foreach ($cartItem as $item) {
                        ?>
                            <tr>
                                <td style="text-align: left; border-bottom: burlywood 3px solid;"><strong><?php echo $item["produs_nume"]; ?></strong></td>
                                <td style="text-align: left; border-bottom: burlywood 3px solid;"><?php echo $item["produs_categ"]; ?></td>
                                <td style="text-align: right; border-bottom: burlywood 3px solid;"><?php echo $item["cantitate"]; ?></td>
                                <td style="text-align: right; border-bottom: burlywood 3px solid;"><?php echo $item["produs_pret"] . "LEI"; ?></td>
                                <td style="text-align: center; border-bottom: brown 3px dotted"><a href="cos.php?action=remove&id=<?php echo $item["cos_id"]; ?>" class="btnRemoveAction"><img src="trash.jpg" width="35" height="35" alt="trash.jpg" title="Remove Item" /></a></td>
                            </tr>
                            </tr>
                        <?php
                            $item_total += ($item["produs_pret"] * $item["cantitate"]);
                        }
                        ?>

                        <tr>
                            <td colspan="3" align=right><strong>Total:</strong></td>
                            <td align=right><?php echo $item_total . "LEI"; ?></td>
                        </tr>
                    </tbody>
                </table>
            <?php
            }
            ?>
        </div>
        <input class="cos" type="button" value="Continuă cumpărăturile" onclick="window.open('magazin.php')" />
        <input class="cos" type="button" value="Abandonează sesiunea" onclick="window.open('logout.php')" />
        <!--goleste cos-->
    </body>

    </html>