<?php

    include "../dblink.php";
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
    $sub_district = $_POST['sub_district'];
    $district = $_POST['district'];
    $province = $_POST['province'];
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


    $sql = "UPDATE `regis_m1_general` 
    SET `code_id`='$code_id',
    `title`='$title',
    `name`='$name',
    `surname`='$surname',
    `school_name`='$school_name',
    `school_district`='$school_district',
    `school_province`='$school_province',
    `grade`='$grade',
    `spacial`='$spacial',
    `bdate`='$bdate',
    `station_bdate`='$station_bdate',
    `blood`='$blood',
    `home_id`='$home_id',
    `home_group`='$home_group',
    `alley`='$alley',
    `street`='$street',
    `sub_district`='$sub_district',
    `district`='$district',
    `province`='$province',
    `post_code`='$post_code',
    `tel`='$tel',
    `father_name`='$father_name',
    `father_surname`='$father_surname',
    `father_occupation`='$father_occupation',
    `father_tel`='$father_tel',
    `mother_name`='$mother_name',
    `mother_surname`='$mother_surname',
    `mother_occupation`='$mother_occupation',
    `mother_tel`='$mother_tel'
    WHERE code_id = '$code_id'";
    $result = mysqli_query($conn,$sql);

        
    // $sql = "INSERT INTO `regis_m1` (`code_id`, `title`, `name`, `surname`, `school_name`, `school_district`, `school_province`, `grade`, `spacial`, `bdate`, `station_bdate`, `blood`, `home_id`, `home_group`, `alley`, `street`, `sub_district`, `district`, `province`, `post_code`, `tel`, `father_name`, `father_surname`, `father_occupation`, `father_tel`, `mother_name`, `mother_surname`, `mother_occupation`, `mother_tel`, `class1`, `class2`, `class3`, `house_regis`, `grade_file1`, `grade_file2`, `status`) 
    // VALUES ('$code_id', '$title', '$name', '$surname', '$school_name', '$school_district', '$school_province', '$grade', '$spacial', '$bdate', '$station_bdate', '$blood', '$home_id', '$home_group', '$alley', '$street', '$sub_district', '$district', '$province', '$post_code', '$tel', '$father_name', '$father_surname', '$father_occupation', '$father_tel', '$mother_name', '$mother_surname', '$mother_occupation', '$mother_tel', '$class1', '$class2', '$class3', '$house_name_file', '$grade1_name_file', '$grade2_name_file', '$status');";
    // $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('แก้ไขข้อมูลเรียบร้อย')</script>";
        echo "<script>window.location.href='general-m1.php'</script>";
    }else{
        echo "<script>alert('ไม่สามารถแก้ไขข้อมูลได้')</script>";
        echo "<script>window.location.href='general-m1.php'</script>";
    }


    mysqli_close($conn);

?>