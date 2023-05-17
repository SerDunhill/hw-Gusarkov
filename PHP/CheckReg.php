<?php
session_start();
require_once 'FunctionsAndClasses/REGCLASS.php';

 $CheckReg = new REGCLASS();
 $CheckReg->RegCheck();

unset($_SESSION['message']);
