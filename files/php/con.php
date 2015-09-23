<?php

$con = mysql_connect("localhost", "adminFL4v6BA", "JUYSftf-NcBX");
mysql_select_db("smfprototype", $con) OR DIE (mysql_error());

if (!$con) {
    die('Could not connect: ' . mysql_error());
}

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 23/09/15
 * Time: 08:40 AM
 */