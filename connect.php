<?php
$connect = mysqli_connect("localhost", "root", "", "PHP");
if (!$connect) {
    die("Query failed");
} else {
    echo "Connected";
}

?>