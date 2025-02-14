<?php
    include '../dblink.php';

    $code_id = $_POST['code_id'];
    $status = $_POST['status'];

    if($status == ''){
        echo "<script>alert('คุณไม่ได้เลือกสถานนะที่ต้องการเปลี่ยน')</script>";
        echo "<script>window.location.href='spacial-m1.php'</script>";
    }

    $query = mysqli_query($conn,"UPDATE regis_m4 SET `status` = '$status' WHERE code_id = '$code_id'");
    if($query){
        echo "<script>alert('เปลี่ยนเรียบร้อย')</script>";
        echo "<script>window.location.href='spacial-m4.php'</script>";
    }else{
        echo "<script>alert('เปลี่ยนไม่ได้')</script>";
        
    }
?>