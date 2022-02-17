<?php
require_once "ShoppingCart.php"; ?>
<HTML>

<HEAD>
    <TITLE>Creare cos cumparaturi </TITLE>
    <link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>

<BODY>
    <div id="product-grid">
        <h2>Produse</h2>

        <div>
            <?php
            $shoppingCart = new ShoppingCart();
            $query = "SELECT * FROM produse";
            $product_array = $shoppingCart->getAllProduct($query);
            if (!empty($product_array)) {
                foreach ($product_array as $key => $value) {
            ?>
                    <div>
                        <form method="post" action="cos.php?action=add&code=<?php echo $product_array[$key]["produs_id"]; ?>">
                            <div>
                                <img class="prod" src="<?php echo $product_array[$key]["produs_img"]; ?>">
                            </div>
                            <div>
                                <strong><?php echo $product_array[$key]["produs_nume"]; ?></strong>
                            </div>
                            <div>

                                <p><?php echo $product_array[$key]["produs_descriere"]; ?>
                            </div>
                            <div class="product-price"><?php echo $product_array[$key]["produs_pret"] . "LEI"; ?></div>
                            <div>
                                <input type="text" name="quantity" value="1" size="2" />
                                <input type="submit" value="Add to cart" />
                            </div>
                        </form>
                    </div>
            <?php
                }
            }
            ?>
        </div>
</body>

</html>