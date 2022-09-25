<?php
    session_start();
    include("/appinc/connect.php");
    $con = AppConnect('corenel_amadeu');
    $md5 = md5(date("YmdHis"));