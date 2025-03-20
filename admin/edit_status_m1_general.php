<?php
    include '../dblink.php';

    $code_id = $_POST['code_id'];
    $status = $_POST['status'];

    if($status == ''){
        echo "<script>alert('คุณไม่ได้เลือกสถานนะที่ต้องการเปลี่ยน')</script>";
        echo "<script>window.location.href='spacial-m1.php'</script>";
    }

    if($status == 'การสมัครเสร็จสิ้น'){
        $query = mysqli_query($conn,"UPDATE regis_m1_general SET `status` = '$status' WHERE code_id = '$code_id'");
    }else if($status == 'รอตรวจสอบเอกสาร'){
        $query = mysqli_query($conn,"UPDATE regis_m1_general SET `status` = '$status' WHERE code_id = '$code_id'");
    }else{
        $query = mysqli_query($conn,"UPDATE regis_m1_general SET `status` = 'การสมัครเสร็จสิ้น', `class1` = 'ปกติ' WHERE code_id = '$code_id'");
    }

    
    if($query){
        echo "<script>alert('เปลี่ยนเรียบร้อย')</script>";
        echo "<script>window.location.href='general-m1.php'</script>";
    }else{
        echo "<script>alert('เปลี่ยนไม่ได้')</script>";
        
    }
?>