<?php

$connection = mysqli_connect('localhost', 'root', 'Ranger9623', 'receipts');
if(!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}

?>