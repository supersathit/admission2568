<?php

    include "dblink.php";
    $code_id = $_POST['code_id'];
    $title = $_POST['title'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $school_name = $_POST['school_name'];
    $school_district = $_POST['school_district'];
    $school_province = $_POST['school_province'];
    $grade = $_POST['grade'];
    $spacial = $_POST['spacial'];
    $bdate = $_POST['bdate'];
    $station_bdate = $_POST['station_bdate'];
    $blood = $_POST['blood'];
    $home_id = $_POST['home_id'];
    $home_group = $_POST['home_group'];
    $alley = $_POST['alley'];
    $street = $_POST['street'];
    $sub_dis = $_POST['sub_district'];
    $dis = $_POST['district'];
    $pro = $_POST['province'];
    $post_code = $_POST['post_code'];
    $tel = $_POST['tel'];
    $father_name = $_POST['father_name'];
    $father_surname = $_POST['father_surname'];
    $father_occupation = $_POST['father_occupation'];
    $father_tel = $_POST['father_tel'];
    $mother_name = $_POST['mother_name'];
    $mother_surname = $_POST['mother_surname'];
    $mother_occupation = $_POST['mother_occupation'];
    $mother_tel = $_POST['mother_tel'];
    $status = "รอตรวจสอบเอกสาร";

    $province_name = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM provinces WHERE id= '$pro'"));
    $district_name = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM amphures WHERE id= '$dis'"));
    $sub_district_name = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM districts WHERE id= '$sub_dis'"));
    $province = $province_name['name_th'];
    $district = $district_name['name_th'];
    $sub_district = $sub_district_name['name_th'];
    

    $sql_chk_id = "SELECT code_id FROM regis_m4 WHERE code_id = $code_id";
    $result_chk_id = mysqli_query($conn,$sql_chk_id);
    $row_chk_id = mysqli_fetch_array($result_chk_id);

    if($row_chk_id == ''){
        if(isset($_FILES['house_regis'])){
            $house_tmp_name =  $_FILES['house_regis']['tmp_name'];
            $grade1_tmp_name =  $_FILES['grade_file1']['tmp_name'];
            $house_locate_img ="file/house/";
            $grade1_locate_img ="file/grade1/";
            $house_type = strrchr($_FILES['house_regis']['name'],".");
            $grade1_type = strrchr($_FILES['grade_file1']['name'],".");
            $house_name_file =  $code_id.$house_type;
            $grade1_name_file =  $code_id.$grade1_type;
            move_uploaded_file($house_tmp_name,$house_locate_img.$house_name_file);
            move_uploaded_file($grade1_tmp_name,$grade1_locate_img.$grade1_name_file);
        }
        if(isset($_FILES['grade_file2'])){
            $grade2_tmp_name =  $_FILES['grade_file2']['tmp_name'];
            $grade2_locate_img ="file/grade2/";
            $grade2_type = strrchr($_FILES['grade_file2']['name'],".");
            if($grade2_tmp_name == ''){
                $grade2_name_file = " ";
            }else{
                $grade2_name_file =  $code_id.$grade2_type;
            }
            move_uploaded_file($grade2_tmp_name,$grade2_locate_img.$grade2_name_file);
        }else{
            $grade2_name_file = "";
        }


        $sql = "INSERT INTO `regis_m4` (`code_id`, `title`, `name`, `surname`, `school_name`, `school_district`, `school_province`, `grade`, `spacial`, `bdate`, `station_bdate`, `blood`, `home_id`, `home_group`, `alley`, `street`, `sub_district`, `district`, `province`, `post_code`, `tel`, `father_name`, `father_surname`, `father_occupation`, `father_tel`, `mother_name`, `mother_surname`, `mother_occupation`, `mother_tel`, `house_regis`, `grade_file1`, `grade_file2`, `status`) 
        VALUES ('$code_id', '$title', '$name', '$surname', '$school_name', '$school_district', '$school_province', '$grade', '$spacial', '$bdate', '$station_bdate', '$blood', '$home_id', '$home_group', '$alley', '$street', '$sub_district', '$district', '$province', '$post_code', '$tel', '$father_name', '$father_surname', '$father_occupation', '$father_tel', '$mother_name', '$mother_surname', '$mother_occupation', '$mother_tel', '$house_name_file', '$grade1_name_file', '$grade2_name_file', '$status');";
        $result = mysqli_query($conn,$sql);

        if($result){
            echo "<script>alert('การกรอกข้อมูลสมัครเสร็จสิ้น กรุณาไปตรวจสอบผลการสมัคร')</script>";
            echo "<script>window.location.href='index.php'</script>";
        }else{
            echo "<script>alert('การสมัครไม่สำเร็จ โปรดลองอีกครั้งในภายหลัง')</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }else{
        echo "<script>alert('คุณได้กรอกข้อมูลสมัครมาแล้วกรุณาไปตรวจสอบผลการสมัคร')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }

    mysqli_close($conn);

?>