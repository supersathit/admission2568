<?php

    include "dblink.php";

    $code_id = $_GET['code_id'];
    if(!$code_id){
        header('location:index.php');
    }

    $sql = "SELECT * FROM regis_m1 WHERE code_id = $code_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    if(strlen($code_id) < 13){
        echo "<script>alert('คุณกรอกเลขบัตรประชาชนไม่ครบ 13 หลัก')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ระบบสมัครสอบ Pre M.1 โรงเรียนวัชรวิทยา</title>
  <script src="https://kit.fontawesome.com/994507c3ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  </head>
  <body class="body">
    <?php include('components/header.php'); ?>
    <div class="container">
        <h2 class="text-secondary text-center mb-5">สถานะการสมัคร</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow rounded-4 p-3 mb-4">
                    <div style="width: 100%; text-align:center;">
                        <img src="img/logo โรงเรยีน.png" width="80px">
                    </div>
                    <div class="fw-bold text-center">
                        ประสงค์เข้าศึกษาต่อชั้นมัธยมศึกษาปีที่ 1 <br>
                        ประเภทห้องเรียนพิเศษ ประจำปีการศึกษา 2568 <br>
                        โรงเรียนวัชรวิทยา  จังหวัดกำแพงเพชร  สำนักงานเขตพื้นที่การศึกษามัธยมศึกษากำแพงเพชร

                    </div>
                    
                    <hr>
                    <div class="mb-3">
                        <p>
                            <strong>ชื่อ : </strong><?=$row['title'].$row['name']." ".$row['surname']?><br>
                            <strong>โรงเรียน : </strong><?=$row['school_name']." อำเภอ".$row['school_district']." จังหวัด".$row['school_province']?><br>
                            <strong>ผลการเรียนเฉลี่ย : </strong><?=$row['grade']?><br>
                            <strong>เบอร์โทร : </strong><?=$row['tel']?><br>
                            <strong>วันเดือนปีเกิด(ค.ศ.) : </strong><?=$row['bdate']?><br>
                            <strong>ทีอยู่ : </strong>บ้านเลขที่ <?=$row['home_id']?> หมู่ <?=$row['home_group']?> ซอย <?=$row['alley']?> ถนน <?=$row['street']?> ตำบล <?=$row['sub_district']?> อำเภอ <?=$row['district']?> จังหวัด <?=$row['province']?> รหัสไปรษณีย์ <?=$row['post_code']?><br>
                            <div class="mt-3"><strong>แผนการเรียน</strong></div>
                            <div class="ps-3">
                                1. <?php if($row['class1'] == 'esmat'){echo "ห้องเรียนพิเศษโครงการ E-SMAT";}else if($row['class1'] == 'ep'){echo "ห้องเรียนพิเศษโครงการสองภาษา (English Program)";}else{echo "ห้องเรียนพิเศษโครงการห้องเรียน สสวท.";} ?><br>
                                2. <?php if($row['class2'] == 'esmat'){echo "ห้องเรียนพิเศษโครงการ E-SMAT";}else if($row['class2'] == 'ep'){echo "ห้องเรียนพิเศษโครงการสองภาษา (English Program)";}else{echo "ห้องเรียนพิเศษโครงการห้องเรียน สสวท.";} ?><br>
                                3. <?php if($row['class3'] == 'esmat'){echo "ห้องเรียนพิเศษโครงการ E-SMAT";}else if($row['class3'] == 'ep'){echo "ห้องเรียนพิเศษโครงการสองภาษา (English Program)";}else{echo "ห้องเรียนพิเศษโครงการห้องเรียน สสวท.";} ?>
                            </div>
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php include('script.php');?>