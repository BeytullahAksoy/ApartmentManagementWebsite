<?php

$db = mysqli_connect("localhost","root","","apartment");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>