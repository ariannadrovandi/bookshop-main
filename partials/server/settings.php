<?php 

define("DB_SERVERNAME", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "root");
define("DB_NAME", "db_books");

$conn = new mysqli(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);

// check connection 
if ($conn && $conn->connect_error){
    echo "Connection failed:".$conn->connect_error;
}