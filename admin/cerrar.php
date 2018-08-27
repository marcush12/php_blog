<?php

session_start();
session_destroy();
$_SESSION = array();//em branco, reinicio

header('Location: ../');
die();

?>
