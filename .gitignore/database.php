<?php

/**
 *  Get the database connection 
 * 
 *  @return object Connection to a MySQL server
 */
function getDB() {
    $db_host = "test";
    $db_name = "test";
    $db_user = "test";
    $db_pass = "test!";

    $conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

    if (mysqli_connect_error()) {
        echo mysqli_connect_error();
        exit;
    }
    return $conn;
}
