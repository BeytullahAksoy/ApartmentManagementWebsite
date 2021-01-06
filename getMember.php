<?php

$db = mysqli_connect("localhost","root","","apartman");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>