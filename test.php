<?php
include_once 'inc/connection.php';

echo "\nLeer_test";

testDB();

function testDB()
{
    $ret = Connection::connect();

    if ($ret == true) {
        echo "\nConnect OK";
    } else {
        echo "\nConnect ERROR";
    }
}

