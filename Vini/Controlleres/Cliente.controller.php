<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once('../config/conect.php');
require_once('../Model/Cliente.class.php');

$cliente = new Cliente($_POST);

$cliente->criar($_POST);

