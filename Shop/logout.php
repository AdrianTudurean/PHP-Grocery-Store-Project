<?php
require_once( "cos.php");
$shoppingCart->emptyCartQuantity($member_id);
session_destroy();
header('Location: index.html');
?>