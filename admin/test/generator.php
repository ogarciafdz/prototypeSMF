<?php
 include('AESEncriptacion.php');
$xmlm='5647586E6A376D4C4A384452524F43744E424152363578644D756A2F41307A36305554677254515145657574623445783768725A3774694869365A6E6A6C716D56556B6F44362F7848634D410A363562674B5079414C7643776F2F6C714C314A6F70326F36784E66644D2F6E44455443656B4F354353486D3567576E657971414554306A6B4673787030716A636E6E436C446845486A6546700A6C43484C39335559574371326A3041505536364C78326838342F762F356756592F6B61562B564A796938646F664F50372F2B5967325532483064616F53513D3D';
$key              = 'C90A3EDE9DA45F812D6066B8F0C9F9A0'; //Llave de 128 bits la cual se le proporcionará al comercio en formato hexadecimal con longitud de 32 caracteres
$textoOriginal    = "<xml><tpPago>C</tpPago><amount>1.00</amount><urlResponse>www.sololosmasfuertes.com.mx</urlResponse><referencia>000001</referencia><moneda>MXN</moneda><date_hour>2015-09-22T14:49:24-05:00</date_hour>";
echo $cadenaEncriptada = AESEncriptacion::encriptar($textoOriginal, $key);
$cadenaOriginal   = AESEncriptacion::desencriptar($cadenaEncriptada, $key);


echo '<a href="https://qa3.mitec.com.mx/pgs/WebPay?id_company=T437&xmlm='.$xmlm.'&xmla='.$cadenaEncriptada.'">Aqui</a>';
echo '<a href="https://qa3.mitec.com.mx/pgs/WebPay?id_company=T437&xmlm=5647586E6A376D4C4A384452524F43744E424152363578644D756A2F41307A36305554677254515145657574623445783768725A3774694869365A6E6A6C716D56556B6F44362F7848634D410A363562674B5079414C7643776F2F6C714C314A6F70326F36784E66644D2F6E44455443656B4F354353486D3567576E657971414554306A6B4673787030716A636E6E436C446845486A6546700A6C43484C39335559574371326A3041505536364C78326838342F762F356756592F6B61562B564A796938646F664F50372F2B5967325532483064616F53513D3D&xmla=AE810BBB76503003253FAED1A03D1E3A0D859ACABEEE5AF0A372D6B9C8C3EA69E012FFE2CE4A1A3DFD340DD09F9B0EF93E38AE3580CD23D15DB05278F59A44CD1573054BE936265047BB34E93AD25AF044E0BC591353714C594CA85359DE6EA87B381773B3E5A90BF535C4E2A465E99208553D719CB893D2EA44C006BFD7B2CE034C494E98BF285C860567B84D88089F91AC3158723255B57EB515B4FD658EE94EA2A68559B16F95F293D00BCE4451AD08F1254C71F49EF3059645B6AD1B882E0D2F9AE8B147758F4E2929FDCEA89C3B9B08B3FEB4A3AAFDCDC92567F440E158CB0B91A9E9CEECFB12B46C9697B7D053">dsds</a>';
/**

 * Created by PhpStorm.
 * User: OscarGarciaRuiz
 * Date: 23/09/15
 * Time: 22:25
 */