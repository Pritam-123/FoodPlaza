<?php
include_once("db.php");
?>

<?php

header('location:index.php');

session_unset();
session_destroy();
exit;
?>