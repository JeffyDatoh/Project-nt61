<?php    
    
    header("Access-Control-Allow-Origin: *");
    header("Content-Type:application/json; charset=UTF-8");
    
    $url = "https://nithi.cs.psu.ac.th/server-status?auto";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);

    $data = curl_exec($curl);

    curl_close($curl);
    //print_r($data);

    $list = explode("\n",$data);

    $Total_Accesses= explode(": ",$list[13]);
    $Total_kBytes= explode(": ",$list[14]);
    $CPU_System= explode(": ",$list[17]);
    $CPU_Load= explode(": ",$list[20]);
    $Uptime= explode(": ",$list[21]);
    $Req_PerSec= explode(": ",$list[22]);
    $Bytes_PerSec= explode(": ",$list[23]);
    $Bytes_PerReq= explode(": ",$list[24]);
    $Duration_PerReq= explode(": ",$list[25]);


    $response = new stdClass();
    $response->Total_Accesses=$Total_Accesses[1];
    $response->Total_kBytes=$Total_kBytes[1];
    $response->CPU_System=$CPU_System[1];
    $response->CPU_Load=$CPU_Load[1];
    $response->Uptime=$Uptime[1];
    $response->Req_PerSec=$Req_PerSec[1];
    $response->Bytes_PerSec=$Bytes_PerSec[1];
    $response->Bytes_PerReq=$Bytes_PerReq[1];
    $response->Duration_PerReq=$Duration_PerReq[1];
    
    $response_json = json_encode($response);
    echo $response_json;



    /*
    // show full data name and value
    echo "<br>","<br>";
    echo $list[13],"<br>";
    echo $list[14],"<br>";
    echo $list[17],"<br>";
    echo $list[20],"<br>";
    echo $list[21],"<br>";
    echo $list[22],"<br>";
    echo $list[23],"<br>";
    echo $list[24],"<br>";
    echo $list[25],"<br>";
    */

    /*
    // show only value
    echo "<br>","<br>";
    echo $Total_Accesses[1],"<br>";
    echo $Total_kBytes[1],"<br>";
    echo $CPU_System[1],"<br>";
    echo $CPU_Load[1],"<br>";
    echo $Uptime[1],"<br>";
    echo $Req_PerSec[1],"<br>";
    echo $Bytes_PerSec[1],"<br>";
    echo $Bytes_PerReq[1],"<br>";
    echo $Duration_PerReq[1],"<br>";
    */


?>
