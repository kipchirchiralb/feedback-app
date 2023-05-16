<!-- mysqli - only for mysql-->
<!-- pdo -- can be used in upto 12 databases -->

<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'albert');
define('DB_PASS', 'password');
define('DB_NAME', 'feedback');

// create connection
$conn = new mysqli(DB_HOST,DB_USER, DB_PASS, DB_NAME);

// check connection

if($conn->connect_error){
    die('connection Failed ' . $conn -> connect_error);
}
