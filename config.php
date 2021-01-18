<?php 

    $databaseHost = 'localhost';
    $databaseUsername = 'root';
    $databasePassword = '';
    $databaseName = 'final';

    $mysqli = mysqli_connect($databaseHost, $databaseUsername,  $databasePassword, $databaseName);

    if(!$mysqli){
    echo "Server not connecting...";}
 
 ?>
