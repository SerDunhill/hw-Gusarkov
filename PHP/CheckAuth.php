<?php
session_start();
require_once 'FunctionsAndClasses/AUTHCLAS.php';

$CheckAuth = new AUTHCLAS();
$CheckAuth->CheckAuth();