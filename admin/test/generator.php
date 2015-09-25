<?php
 include('AESEncriptacion.php');

$key              = 'C90A3EDE9DA45F812D6066B8F0C9F9A0'; //Llave de 128 bits la cual se le proporcionará al comercio en formato hexadecimal con longitud de 32 caracteres
$textoOriginal    = "<xml><tpPago>C</tpPago><amount>1.00</amount><urlResponse>www.sololosmasfuertes.com.mx</urlResponse><referencia>000001</referencia><moneda>MXN</moneda><date_hour>2015-09-22T14:49:24-05:00<date_hour>";
$cadenaEncriptada = AESEncriptacion::encriptar($textoOriginal, $key);
$cadenaOriginal   = AESEncriptacion::desencriptar($cadenaEncriptada, $key);


/**
 * Created by PhpStorm.
 * User: OscarGarciaRuiz
 * Date: 23/09/15
 * Time: 22:25
 */