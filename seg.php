<?php
session_start();
if (empty($_SESSION['id'])) {
$_SESSION['msg'] = "Área resrita";
  header("Location: login.php");

}