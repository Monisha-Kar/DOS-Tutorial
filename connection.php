
<?php

$connect = mysqli_connect("MYSQL SERVER", "MYSQL USERNAME", "MYSQL PASSWORD", "DATABASE NAME", "PORT NUMBER");

if (!$connect) {
    die("Connection Failed: " . mysqli_connect_error());
}

?>
