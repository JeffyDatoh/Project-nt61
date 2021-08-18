<?php

    header("Access-Control-Allow-Origin: *");
    header("Content-Type:application/json; charset=UTF-8");

    $days[] = array();
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

        $days[] = array(fgets($fh));

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

    $response = new stdClass();
		$response->Days=$days;
		$response->T_AC=$Total_Accesses;
		$response->T_KB=$Total_kBytes;
        $response->CP_CS=$CPU_ChildrenSystem;
        $response->CP_L=$CPU_Load;
        $response->UP=$Uptime;
        $response->RQ_PS=$Req_PerSec;
        $response->B_PS=$Bytes_PerSec;
        $response->B_PR=$Bytes_PerReq;
        $response->D_PR=$Duration_PerReq;
       
		$response_json = json_encode($response);
		echo $response_json;
?>

