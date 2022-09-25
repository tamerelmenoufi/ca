<?php
    session_start();
    include("/sisinc/sisConnect.php");
    $con = AppConnect('corenel_amadeu');
    $md5 = md5(date("YmdHis"));