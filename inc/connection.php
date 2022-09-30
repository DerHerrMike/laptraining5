<?php
include 'config.php';

Class Connection {

    static function connect() {
        try {
            $connection = new PDO('mysql:host='.DBHOST.';dbname='.DBNAME.';charset=utf8', DBUSER, DBPASS);
            $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $connection;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}