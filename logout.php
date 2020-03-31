<?php
/*
    Created by : Priyanka Khadilkar
*/
require_once 'utilities/Session.php';

//Initialize the session
$sessionData = Session::getInstance();
$sessionData -> destroy();
header('Location: login.php');