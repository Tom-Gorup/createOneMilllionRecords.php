<?php

mysql_connect("localhost", "username", "password") or die(mysql_error()); // Connect to database server(localhost) with username and password.
mysql_select_db("database") or die(mysql_error());

function genRandomString() {
    $length = 10;
    $characters = "0123456789abcdefghijklmnopqrstuvwxyz";
    $string = '';    
    for ($p = 0; $p < $length; $p++) {
        $string .= $characters[mt_rand(0, strlen($characters))];
    }
    return $string;
}

$id = 1;
for ($i=1; $i<=1000000; $i++) {   
        $username = genRandomString();
        mysql_query("INSERT INTO tbl_users (id, username) VALUES ($id, '$username')");
        $id = $id + 1;
}
?>