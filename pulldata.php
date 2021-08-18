<?php
    $url = "https://nithi.cs.psu.ac.th/server-status?auto";

    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HEADER, false);

    $data = curl_exec($curl);

    curl_close($curl);
    //print_r($data);

    $list = explode("\n",$data);

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


    // show only value
    $Total_Accesses= explode(":",$list[13]);
    $Total_kBytes= explode(":",$list[14]);
    $CPUSystem= explode(":",$list[17]);
    $CPULoad= explode(":",$list[20]);
    $Uptime= explode(":",$list[21]);
    $ReqPerSec= explode(":",$list[22]);
    $BytesPerSec= explode(":",$list[23]);
    $BytesPerReq= explode(":",$list[24]);
    $DurationPerReq= explode(":",$list[25]);

    echo "<br>","<br>";
    echo $Total_Accesses[1],"<br>";
    echo $Total_kBytes[1],"<br>";
    echo $CPUSystem[1],"<br>";
    echo $CPULoad[1],"<br>";
    echo $Uptime[1],"<br>";
    echo $ReqPerSec[1],"<br>";
    echo $BytesPerSec[1],"<br>";
    echo $BytesPerReq[1],"<br>";
    echo $DurationPerReq[1],"<br>";
    
?>
