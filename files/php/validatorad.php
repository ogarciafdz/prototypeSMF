<?php
include 'con.php';
session_start();

if (trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "") {
    $usuario = strtolower(htmlentities($_POST["usuario"], ENT_QUOTES));
    $password = $_POST["password"];
    $result = mysql_query("SELECT password, email,name FROM employees WHERE email='$usuario'");
    mysql_close($con);
    if ($row = mysql_fetch_array($result)) {
        if ($row["password"] == $password) {
            echo "exitoso";
            $_SESSION["k_username"] = $row['email'];
            $_SESSION["name"] = $row['name'];
            echo "
			<SCRIPT LANGUAGE='javascript'>
			location.href = '../../admin/index.php';
			</SCRIPT>";

        } else {
            echo "traseña";

            echo "<SCRIPT LANGUAGE='javascript'>
			alert('Contraseina incorrecta');
			location.href = '../../admin/login.php';
			</SCRIPT>";

        }
    } else {
        echo "data";

        echo "<SCRIPT LANGUAGE='javascript'>
			alert('Datos no existen en la base de datos');
			location.href = '../../admin/login.php';
			</SCRIPT>";
    }
} else {
    echo "<SCRIPT LANGUAGE='javascript'>
			location.href = '../../admin/login.php';
			alert('Ningun dato fue ingrsado');
			</SCRIPT>";
}
/**
 * Created by PhpStorm.
 * User: OscarGarciaRuiz
 * Date: 07/01/15
 * Time: 11:53
 */