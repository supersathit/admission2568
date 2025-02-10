<?php

    include "dblink.php";
    $code_id = $_POST['code_id'];
    $name_title = $_POST['name_title'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $bdate = $_POST['bdate'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $school = $_POST['school'];
    $sub_district = $_POST['sub_district'];
    $district = $_POST['district'];
    $province = $_POST['province'];
    $p_code = $_POST['p_code'];
    $s_tel = $_POST['s_tel'];
    $tel = $_POST['tel'];
    $grade = $_POST['grade'];

    $sql_chk_id = "SELECT code_id FROM register WHERE code_id = $code_id";
    $result_chk_id = mysqli_query($conn,$sql_chk_id);
    $row_chk_id = mysqli_fetch_array($result_chk_id);

    if($row_chk_id == ''){
        $sql = "INSERT INTO `register` (`code_id`, `name_title`, `name`, `surname`, `bdate`, `nationality`, `religion`, `school`, `sub-district`, `district`, `province`, `p_code`, `s_tel`, `tel`, `grade`) 
        VALUES ('$code_id', '$name_title', '$name', '$surname', '$bdate', '$nationality', '$religion', '$school', '$sub_district', '$district', '$province', '$p_code', '$s_tel', '$tel', $grade);";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo "<script>alert('การกรอกข้อมูลสมัครเสร็จสิ้น กรุณาไปตรวจสอบสถานะการสมัครที่เมนูสถานะ เพื่อตรวจสอบการสมัครและชำระเงินค่าสมัคร')</script>";
            echo "<script>window.location.href='index.html'</script>";
        }else{
            echo "<script>alert('การสมัครไม่สำเร็จ โปรดลองอีกครั้งในภายหลัง')</script>";
            echo "<script>window.location.href='index.html'</script>";
        }
    }else{
        echo "<script>alert('คุณได้กรอกข้อมูลสมัครมาแล้วกรุณาไปตรวจสอบข้อมูลการสมัครและการชำระเงินที่เมนูสถานะ')</script>";
        echo "<script>window.location.href='index.html'</script>";
    }

    mysqli_close($conn);

?>