<?php
    include 'dblink.php';

    $day1 = '2025-02-15 12:00:47';
    $day2 = date('2025-02-15 16.30.00');
    // echo date('Y-m-d H:i:s').'<br>';

    // if($day1 <= $day2){
    //     echo 'true';
    // }else{
    //     echo 'false';
    // }

    // $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$d1' AND status = 'ผ่าน'"));
    // echo $value['COUNT(*)'];
    $d1 = ('2025-02-15 16:30:00');
    function date_time($date){
        include 'dblink.php';
        $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$date' AND status = 'ผ่าน'"));
        return $value['COUNT(*)'];
    }

    echo date_time('2025-02-15 16:30:00');

?>