<?php 
session_start() ;
require 'inc/head.php'; 

// destruction $_SESSION
$_SESSION=array();
session_destroy();
unset($_SESSION) ;

header('Location: login.php');
