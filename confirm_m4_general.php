<?php

    include "dblink.php";

    $code_id = $_GET['code_id'];
    if(!$code_id){
        header('location:index.php');
    }

    $sql = "SELECT code_id FROM regis_m4 WHERE code_id = $code_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);
    $row1 = mysqli_fetch_array(mysqli_query($conn,"SELECT code_id FROM regis_m4_general WHERE code_id = $code_id"));

    if(strlen($code_id) < 13){
        echo "<script>alert('คุณกรอกเลขบัตรประชาชนไม่ครบ 13 หลัก')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }else if($row1 != ''){
        echo "<script>alert('คุณได้ทำการสมัครมาแล้ว')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }else if($row == ''){
        echo "<script>alert('ไม่พบข้อมูลในการสมัครห้องเรียนพิเศษ')</script>";
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
        <h2 class="text-secondary text-center mb-5">ยืนยันสิทธิ์สมัครห้องเรียนปกติ</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow rounded-4 p-3 mb-4">
                    <div style="width: 100%; text-align:center;">
                        <img src="img/logo โรงเรยีน.png" width="80px">
                    </div>
                    <div class="fw-bold text-center">
                        สมัครเข้าศึกษาต่อชั้นมัธยมศึกษาปีที่ 4 <br>
                        ประเภทห้องเรียนปกติ ประจำปีการศึกษา 2568 <br>
                        โรงเรียนวัชรวิทยา  จังหวัดกำแพงเพชร  สำนักงานเขตพื้นที่การศึกษามัธยมศึกษากำแพงเพชร

                    </div>
                    
                    <hr>
                    <div class="p-4">
                        <div class="p-3 rounded-3 text-white" style="background-color:#535c68;">
                            <strong>แผนการเรียนที่เปิดรับนักเรียน</strong> <br>
                            1. แผนการเรียนศิลป์ - คำนวณ จำนวน 9 คน <br>
                            2. แผนการเรียนศิลป์ - ภาษาจีน	จำนวน 18 คน <br>
                            3. แผนการเรียนศิลป์สังคม – นิติ - รัฐศาสตร์	จำนวน 2 คน<br>
                            4. แผนการเรียนศิลป์ - ภาษาอังกฤษ จำนวน 1 คน<br>
                            5. แผนการเรียนศิลปกรรมศาสตร์ - การกีฬา จำนวน 23 คน<br>
                        </div>
                    </div>
                    <div class="text-danger mb-3">
                        <strong>คำชี้แจง: </strong>หากช่องไหนไม่มีข้อมูลให้ใส่เครื่องหมาย " - "
                    </div>

                    <?php
                        include "dblink.php";
                        $sql = "SELECT * FROM regis_m4 WHERE code_id = $code_id";
                        $result = mysqli_query($conn,$sql);
                        $val = mysqli_fetch_array($result);
                    ?>

                    <form action="php_confirm_regis_m4_general.php" method="post" enctype="multipart/form-data" class="needs-validation" novalidate>

                    <strong>1. ประวัติส่วนตัว</strong>
                        <div class="row p-3">
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">เลขบัตรประจำตัวประชาชน</label>
                                <input type="text" name="code_id" id="" class="form-control" placeholder="กรอกชื่อ" value="<?=$val['code_id']?>" readonly style="background-color:#CCFF99;">
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom01" class="form-label">คำนำหน้า</label>
                                <input type="text" name="title" id="" class="form-control" placeholder="กรอกชื่อ" value="<?=$val['title']?>" readonly style="background-color:#CCFF99;">
                                <div class="invalid-feedback">
                                    *กรุณาเลือกคำนำหน้า
                                </div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom02" class="form-label">ชื่อ</label>
                                <input type="text" name="name" id="validationCustom02" class="form-control" placeholder="กรอกชื่อ" value="<?=$val['name']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อ</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-5">
                                <label for="validationCustom03" class="form-label">นามสกุล</label>
                                <input type="text" name="surname" id="validationCustom03" class="form-control" placeholder="กรอกนามสกุล" value="<?=$val['surname']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกนามสกุล</div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom07" class="form-label">กำลังศึกษาอยู่ในระดับชั้นมัธยมศึกษาปีที่ 3 โรงเรียน</label>
                                <input type="text" name="school_name" id="validationCustom07" class="form-control" placeholder="กรอกชื่อโรงเรียน" value="<?=$val['school_name']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom05" class="form-label">อำเภอ</label>
                                <input type="text" name="school_district" id="validationCustom05" class="form-control" placeholder="กรอกอำเภอที่ตั้งโรงเรียน" value="<?=$val['school_district']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกอำเภอที่ตั้งโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom06" class="form-label">จังหวัด</label>
                                <input type="text" name="school_province" id="validationCustom06" class="form-control" placeholder="กรอกจังหวัดที่ตั้งโรงเรียน" value="<?=$val['school_province']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกจังหวัดที่ตั้งโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom06" class="form-label">ผลการเรียนเฉลี่ย 5 ภาคเรียน</label>
                                <input type="text" name="grade" id="validationCustom06" class="form-control" placeholder="กรอกผลการเรียนเฉลี่ย" value="<?=$val['grade']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกผลการเรียนเฉลี่ย</div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom06" class="form-label">ความสามารถพิเศษ</label>
                                <input type="text" name="spacial" id="validationCustom06" class="form-control" placeholder="กรอกความสามารถพิเศษ" value="<?=$val['spacial']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกความสามารถพิเศษ</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom04" class="form-label">วันเดือนปีเกิด ค.ศ.</label>
                                <input type="date" name="bdate" id="validationCustom04" class="form-control" value="<?=$val['bdate']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกวันเดือนปีเกิด</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-5">
                                <label for="validationCustom06" class="form-label">สถานที่เกิด</label>
                                <input type="text" name="station_bdate" id="validationCustom06" class="form-control" placeholder="กรอกสถานที่เกิด" value="<?=$val['station_bdate']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกสถานที่เกิด</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom01" class="form-label">หมู่เลือด</label>
                                <select name="blood" id="validationCustom01" class="form-select" required>
                                    <option value="<?=$val['blood']?>" selected><?=$val['blood']?></option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกหมู่เลือด
                                </div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">บ้านเลขที่</label>
                                <input type="text" name="home_id" id="validationCustom08" class="form-control" placeholder="กรอกบ้านเลขที่" value="<?=$val['home_id']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกบ้านเลขที่</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">หมู่</label>
                                <input type="text" name="home_group" id="validationCustom08" class="form-control" placeholder="กรอกหมู่" value="<?=$val['home_group']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกหมู่</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">ซอย</label>
                                <input type="text" name="alley" id="validationCustom08" class="form-control" placeholder="กรอกซอย" value="<?=$val['alley']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกซอย</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">ถนน</label>
                                <input type="text" name="street" id="validationCustom08" class="form-control" placeholder="กรอกถนน" value="<?=$val['street']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกถนน</div>
                            </div>
                            <?php
                                include 'dblink.php';
                                $sql_provinces = "SELECT * FROM provinces";
                                $query = mysqli_query($conn, $sql_provinces);
                            ?>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="provinces" class="form-label">จังหวัด</label>
                                <select name="province" id="provinces" class="form-select" required>
                                    <option value="" selected disabled>-กรุณาเลือกจังหวัด-</option>
                                    <?php foreach ($query as $value) { ?>
                                    <option value="<?=$value['id']?>"><?=$value['name_th']?></option>
                                    <?php } ?>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกจังหวัด
                                </div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="amphures" class="form-label">อำเภอ</label>
                                <select name="district" id="amphures" class="form-select" required>

                                </select>
                                <div class="invalid-feedback">*กรุณากรอกอำเภอ</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="districts" class="form-label">ตำบล</label>
                                <select name="sub_district" id="districts" class="form-select" required>

                                </select>
                                <div class="invalid-feedback">*กรุณากรอกตำบล</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="zip_code" class="form-label">รหัสไปรษณีย์</label>
                                <input type="text" name="post_code" id="zip_code" class="form-control" maxlength="5" required>
                                <div class="invalid-feedback">*กรุณากรอกรหัสไปรษณีย์</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom08" class="form-label">เบอร์โทรศัพท์</label>
                                <input type="text" name="tel" id="validationCustom08" class="form-control" maxlength="10" placeholder="กรอกเบอร์โทรศัพท์" value="<?=$val['tel']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกเบอร์โทรศัพท์</div>
                            </div>
                            
                            <div class="my-3">
                                <strong>2. ข้อมูลบิดา มารดา</strong>
                            </div>
                            
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">ชื่อบิดา</label>
                                <input type="text" name="father_name" id="validationCustom08" class="form-control" placeholder="กรอกชื่อบิดา" value="<?=$val['father_name']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อบิดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">นามสกุลบิดา</label>
                                <input type="text" name="father_surname" id="validationCustom08" class="form-control" placeholder="กรอกนามสกุลบิดา" value="<?=$val['father_surname']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกนามสกุลบิดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">อาชีพบิดา</label>
                                <input type="text" name="father_occupation" id="validationCustom08" class="form-control" placeholder="กรอกอาชีพบิดา" value="<?=$val['father_occupation']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกอาชีพบิดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">เบอร์โทรบิดา</label>
                                <input type="text" name="father_tel" id="validationCustom08" maxlength="10" class="form-control" placeholder="กรอกเบอร์โทรบิดา" value="<?=$val['father_tel']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกเบอร์โทรบิดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">ชื่อมารดา</label>
                                <input type="text" name="mother_name" id="validationCustom08" class="form-control" placeholder="กรอกชื่อมารดา" value="<?=$val['mother_name']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อมารดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">นามสกุลมารดา</label>
                                <input type="text" name="mother_surname" id="validationCustom08" class="form-control" placeholder="กรอกนามสกุลมารดา" value="<?=$val['mother_surname']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกนามสกุลมารดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">อาชีพมารดา</label>
                                <input type="text" name="mother_occupation" id="validationCustom08" class="form-control" placeholder="กรอกอาชีพมารดา" value="<?=$val['mother_occupation']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกอาชีพมารดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">เบอร์โทรมารดา</label>
                                <input type="text" name="mother_tel" id="validationCustom08" maxlength="10" class="form-control" placeholder="กรอกเบอร์โทรมารดา" value="<?=$val['mother_tel']?>" required>
                                <div class="invalid-feedback">*กรุณากรอกเบอร์โทรมารดา</div>
                            </div>
                            

                            <div class="my-3">
                                <strong>3. เลือกแผนการเรียน</strong>
                            </div>
                            <p class="text-danger">***เลือกได้มากสุด 5 ลำดับ น้อยสุด 1 ลำดับ***</p>
                            <div class="col-12 mb-3">
                                <label for="validationCustom01" class="form-label">ลำดับที่ 1</label>
                                <select name="class1" id="validationCustom01" class="form-select" required>
                                    <option value="" selected disabled>--เลือกแผนการเรียน1--</option>
                                    <option value="ศิลป์คำนวณ">แผนการเรียนศิลป์ - คำนวณ จำนวน 9 คน</option>
                                    <option value="ศิลป์จีน">แผนการเรียนศิลป์ - ภาษาจีน จำนวน 18 คน</option>
                                    <option value="ศิลป์นิติ">แผนการเรียนศิลป์สังคม – นิติ - รัฐศาสตร์ จำนวน 2 คน</option>
                                    <option value="ศิลป์อังกฤษ">แผนการเรียนศิลป์ - ภาษาอังกฤษ จำนวน 1 คน</option>
                                    <option value="ศิลปกรรมศาสตร์" onclick="if(this.selected){myFunction1()}">แผนการเรียนศิลปกรรมศาสตร์ - การกีฬา จำนวน 23 คน</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกแผนการเรียนลำดับที่ 1
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom01" class="form-label">ลำดับที่ 2</label>
                                <select name="class2" id="validationCustom01" class="form-select" >
                                    <option value="" selected disabled>--เลือกแผนการเรียน2--</option>
                                    <option value="ศิลป์คำนวณ">แผนการเรียนศิลป์ - คำนวณ จำนวน 9 คน</option>
                                    <option value="ศิลป์จีน">แผนการเรียนศิลป์ - ภาษาจีน จำนวน 18 คน</option>
                                    <option value="ศิลป์นิติ">แผนการเรียนศิลป์สังคม – นิติ - รัฐศาสตร์ จำนวน 2 คน</option>
                                    <option value="ศิลป์อังกฤษ">แผนการเรียนศิลป์ - ภาษาอังกฤษ จำนวน 1 คน</option>
                                    <option value="ศิลปกรรมศาสตร์">แผนการเรียนศิลปกรรมศาสตร์ - การกีฬา จำนวน 23 คน</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกแผนการเรียนลำดับที่ 2
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom01" class="form-label">ลำดับที่ 3</label>
                                <select name="class3" id="validationCustom01" class="form-select" >
                                    <option value="" selected disabled>--เลือกแผนการเรียน3--</option>
                                    <option value="ศิลป์คำนวณ">แผนการเรียนศิลป์ - คำนวณ จำนวน 9 คน</option>
                                    <option value="ศิลป์จีน">แผนการเรียนศิลป์ - ภาษาจีน จำนวน 18 คน</option>
                                    <option value="ศิลป์นิติ">แผนการเรียนศิลป์สังคม – นิติ - รัฐศาสตร์ จำนวน 2 คน</option>
                                    <option value="ศิลป์อังกฤษ">แผนการเรียนศิลป์ - ภาษาอังกฤษ จำนวน 1 คน</option>
                                    <option value="ศิลปกรรมศาสตร์">แผนการเรียนศิลปกรรมศาสตร์ - การกีฬา จำนวน 23 คน</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกแผนการเรียนลำดับที่ 3
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom01" class="form-label">ลำดับที่ 4</label>
                                <select name="class4" id="validationCustom01" class="form-select" >
                                    <option value="" selected disabled>--เลือกแผนการเรียน4--</option>
                                    <option value="ศิลป์คำนวณ">แผนการเรียนศิลป์ - คำนวณ จำนวน 9 คน</option>
                                    <option value="ศิลป์จีน">แผนการเรียนศิลป์ - ภาษาจีน จำนวน 18 คน</option>
                                    <option value="ศิลป์นิติ">แผนการเรียนศิลป์สังคม – นิติ - รัฐศาสตร์ จำนวน 2 คน</option>
                                    <option value="ศิลป์อังกฤษ">แผนการเรียนศิลป์ - ภาษาอังกฤษ จำนวน 1 คน</option>
                                    <option value="ศิลปกรรมศาสตร์">แผนการเรียนศิลปกรรมศาสตร์ - การกีฬา จำนวน 23 คน</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกแผนการเรียนลำดับที่ 4
                                </div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom01" class="form-label">ลำดับที่ 5</label>
                                <select name="class5" id="validationCustom01" class="form-select" >
                                    <option value="" selected disabled>--เลือกแผนการเรียน5--</option>
                                    <option value="ศิลป์คำนวณ">แผนการเรียนศิลป์ - คำนวณ จำนวน 9 คน</option>
                                    <option value="ศิลป์จีน">แผนการเรียนศิลป์ - ภาษาจีน จำนวน 18 คน</option>
                                    <option value="ศิลป์นิติ">แผนการเรียนศิลป์สังคม – นิติ - รัฐศาสตร์ จำนวน 2 คน</option>
                                    <option value="ศิลป์อังกฤษ">แผนการเรียนศิลป์ - ภาษาอังกฤษ จำนวน 1 คน</option>
                                    <option value="ศิลปกรรมศาสตร์">แผนการเรียนศิลปกรรมศาสตร์ - การกีฬา จำนวน 23 คน</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกแผนการเรียนลำดับที่ 5
                                </div>
                            </div>
                            
                            <div class="col-12 mb-3 mt-3 p-3 rounded-3" style="background-color:#dff9fb;">
                                <h5 class="fw-bold">**ถ้าเลือกแผนการเรียนศิลปกรรมศาสตร์ - การกีฬา***</h5>
                                <span class="mb-2 d-block text-danger">**หากเลือกแผนการเรียนศิลปกรรมศาสตร์ - การกีฬา ไม่ว่าจะเลือกลำดับได้ก็ตาม ให้เลือกความถนัดด้านล่างนี้ แต่ถ้าไม่ได้เลือกแผนการเรียนศิลปกรรมศาสตร์ - การกีฬา ไม่ต้องทำในกรอบนี้**</span>
                                <div class="ps-3" id="mmm">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="ด้านศิลปะ" id="invalidCheck3" name="s1">
                                        <label class="form-check-label" for="invalidCheck3">ด้านศิลปะ</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="ด้านดนตรี" id="invalidCheck4" name="s1">
                                        <label class="form-check-label" for="invalidCheck4">ด้านดนตรี</label>
                                    </div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" value="ด้านกีฬา" id="invalidCheck5" name="s1">
                                        <label class="form-check-label" for="invalidCheck5">ด้านกีฬา</label>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="validationCustom01" class="form-label">ภาพเกียรติบัตรตามความสามารถด้านที่เลือก ที่ได้ในระดับเขตพื้นที่ขึ้นไป</label>
                                        <input type="file" name="special_file" id="" class="form-control" accept="image/*">
                                        <span class="text-danger">***สำหรับคนที่เลือกแผนการเรียนศิลปกรรมศาสตร์ - การกีฬา***</span>
                                    </div>
                                </div>
                            </div>
                            
                            
                            <hr>
                            <div class="mt-3 text-center">
                                <a href="index.php" class="btn btn-warning"><i class="fa-solid fa-house"></i> กลับหน้าแรก</a>
                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-paper-plane"></i> ยืนยันการสมัคร</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>



    <script language="JavaScript">
      
      (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()

      
        let a = new Date("2025-03-24T09:30:00Z")
        let b = new Date()
        if(b > a){
            alert('ขออภัย หมดเวลาสมัครแล้ว');
            window.location.href='index.php';
        }


        // document.getElementById("mmm").style.display = "none";
        function myFunction1(){
            document.getElementById("mmm").style.display = "none";
        }
        function myFunction2(){
            document.getElementById("mmm").style.display = "block";
        }
      
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php include('script.php');?>