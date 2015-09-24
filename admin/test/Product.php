<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 24/09/15
 * Time: 10:31 AM
 */
include "../../files/php/con.php";

class Product
{

    function Product($id)
    {
        $id = $this->$id = $id;
        $producto = mysql_query("SELECT * FROM products WHERE id = $id") or die  (mysql_error());



        $name = mysql_result($producto, 0, 2);
        $desc = mysql_result($producto, 0, 3);
        $type = mysql_result($producto, 0, 4);
        $sku = mysql_result($producto, 0, 5);
        $price = mysql_result($producto, 0, 6);
        $qty = mysql_result($producto, 0, 7);
        $vis = mysql_result($producto, 0, 8);
        $imagepath = mysql_result($producto, 0, 9);


    }

}