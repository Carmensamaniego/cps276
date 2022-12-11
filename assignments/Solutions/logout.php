<?php
session_start();
/* DELETE THE SESSION VALUES*/
session_unset();

header('Location: login.php'); // should this be login or index?
?>