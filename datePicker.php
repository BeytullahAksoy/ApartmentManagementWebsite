<?php

session_start();

if (isset($_POST['firstdatepicker'])) {
  $firstDate= $_POST['firstdatepicker'];
  $lastDate= $_POST['lastdatepicker'];

  echo "aaa";

  echo $_SESSION['year'];
}

?>
