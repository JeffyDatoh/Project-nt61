
<!DOCTYPE html>
<html>
<body>
<?php require 'notify.php';?>
    <scrip>
        if(avg_ta + 25 < total_ta  || avg_ta + 50 < total_ta) 
            function_alert();
        if(avg_tk + 25 < total_tk  || avg_tk + 50 < total_tk)  
            function_alert();
        if(avg_cpus + 25 < total_cpus || avg_cpus + 50 < total_cpus)   
            function_alert();
        if(avg_cpul + 25 < total_cpul || avg_cpul + 50 < total_cpul)  
            function_alert();
        if(avg_ut + 25 < total_ut || avg_ut + 50 < total_ut) 
            function_alert();
        if(avg_rps + 25 < total_rps || avg_rps + 50 < total_rps)  
            function_alert();
        if(avg_bps + 25 < total_bps || avg_bps + 50 < total_bps)  
            function_alert();
        if(avg_bpr + 25 < total_bpr || avg_bpr + 50 < total_bpr) 
            function_alert();
        if(avg_dpr + 25 < total_dpr || avg_dpr + 50 < total_dpr)  
            function_alert();
    </scrip> 
    //เอาไปใส่หลังค่าเฉลี่ยในไฟล์new_chartเพื่อเอาไปเทสดู
    //ปรับแก้ตัวเลขที่เพิ่มหลังavgแต่ละตัวเพื่อนำไปใช้จริง
    //ฝากเทสหน่อย
</body>
</html>
