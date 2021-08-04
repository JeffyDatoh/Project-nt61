<?php

    $date[] = array();
    $Total_Accesses[] = array();
    $Total_kBytes[] = array();
    $CPU_ChildrenSystem[] = array();
    $CPU_Load[] = array();
    $Uptime[] = array();
    $Req_PerSec[] = array();
    $Bytes_PerSec[] = array();
    $Bytes_PerReq[] = array();
    $Duration_PerReq[] = array();

    $myFile = "pulldata.txt";
    $fh = fopen($myFile,'r');
    while( !feof($myFile) ){

        $date[] = array(fgets($fh));

        $Total_Accesses[] = array(fgets($fh));

        $Total_kBytes[] = array(fgets($fh));

        $CPU_ChildrenSystem[] = array(fgets($fh));

        $CPU_Load[] = array(fgets($fh));

        $Uptime[] = array(fgets($fh));

        $Req_PerSec[] = array(fgets($fh));

        $Bytes_PerSec[] = array(fgets($fh));

        $Bytes_PerReq[] = array(fgets($fh));

        $Duration_PerReq[] = array(fgets($fh));

        $Line[] = array(fgets($fh0));

    }
    fclose($myFile);
?>