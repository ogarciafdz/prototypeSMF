<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 24/09/15
 * Time: 10:31 AM
 */
include "../files/php/con.php";

class Product{

    function Product($id){

        $producto = mysql_query("SELECT * FROM products WHERE id = $id") or die  (mysql_error());


    }

}