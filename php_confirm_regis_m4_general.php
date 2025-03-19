<script>
    let a = new Date("2025-03-24T09:30:00Z")
    let b = new Date()
    if(b > a){
        alert('ขออภัย หมดเวลาสมัครแล้ว');
        window.location.href='index.php';
    }
</script>
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

    

    function ClassRoom($cl){
        if(isset($_POST['sp1'])){
            $sp1 = $_POST['sp1'];
        }else{
            $sp1 = '';
        }
        if($cl == 'ศิลปกรรมศาสตร์'){
            $class = $cl." ".$sp1;
        }else{
            $class = $cl;
        }
        
        return $class;
    }

    $class1 = ClassRoom($_POST['class1']);
    $class2 = ClassRoom(@$_POST['class2']);
    $class3 = ClassRoom(@$_POST['class3']);
    $class4 = ClassRoom(@$_POST['class4']);
    $class5 = ClassRoom(@$_POST['class5']);

    // echo $class1.'<br>';
    // echo $class2.'<br>';
    // echo $class3.'<br>';
    // echo $class4.'<br>';
    // echo $class5.'<br>';

    $status = "รอตรวจสอบเอกสาร";

    $province_name = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM provinces WHERE id= '$pro'"));
    $district_name = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM amphures WHERE id= '$dis'"));
    $sub_district_name = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM districts WHERE id= '$sub_dis'"));
    $province = $province_name['name_th'];
    $district = $district_name['name_th'];
    $sub_district = $sub_district_name['name_th'];
    

    $sql_chk_id = "SELECT code_id FROM regis_m4_general WHERE code_id = $code_id";
    $result_chk_id = mysqli_query($conn,$sql_chk_id);
    $row_chk_id = mysqli_fetch_array($result_chk_id);

    if($row_chk_id == ''){
        $old = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM regis_m4 WHERE code_id = $code_id"));
        $house_name_file =$old['house_regis'];
        $grade1_name_file =$old['grade_file1'];
        $grade2_name_file =$old['grade_file2'];

        if(isset($_FILES['special_file'])){
            $special_tmp_name =  $_FILES['special_file']['tmp_name'];
            $special_locate_img ="file/special/";
            $special_type = strrchr($_FILES['special_file']['name'],".");
            if($special_tmp_name == ''){
                $special_name_file = null;
            }else{
                $special_name_file =  $code_id.$special_type;
            }
            move_uploaded_file($special_tmp_name,$special_locate_img.$special_name_file);
        }else{
            $special_name_file = "";
        }


        $sql = "INSERT INTO `regis_m4_general` (`code_id`, `title`, `name`, `surname`, `school_name`, `school_district`, `school_province`, `grade`, `spacial`, `bdate`, `station_bdate`, `blood`, `home_id`, `home_group`, `alley`, `street`, `sub_district`, `district`, `province`, `post_code`, `tel`, `father_name`, `father_surname`, `father_occupation`, `father_tel`, `mother_name`, `mother_surname`, `mother_occupation`, `mother_tel`, `class1`, `class2`, `class3`, `class4`, `class5`, `house_regis`, `grade_file1`, `grade_file2`, `special_file`, `status`) 
        VALUES ('$code_id', '$title', '$name', '$surname', '$school_name', '$school_district', '$school_province', '$grade', '$spacial', '$bdate', '$station_bdate', '$blood', '$home_id', '$home_group', '$alley', '$street', '$sub_district', '$district', '$province', '$post_code', '$tel', '$father_name', '$father_surname', '$father_occupation', '$father_tel', '$mother_name', '$mother_surname', '$mother_occupation', '$mother_tel', '$class1', '$class2', '$class3', '$class4', '$class5', '$house_name_file', '$grade1_name_file', '$grade2_name_file', '$special_name_file', '$status');";
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