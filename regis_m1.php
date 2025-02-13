<?php

    include "dblink.php";

    $code_id = $_POST['code_id'];

    $sql = "SELECT code_id FROM regis_m1 WHERE code_id = $code_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    if(strlen($code_id) < 13){
        echo "<script>alert('คุณกรอกเลขบัตรประชาชนไม่ครบ 13 หลัก')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }else if($row != ''){
        echo "<script>alert('คุณได้กรอกข้อมูลสมัครมาแล้วกรุณาไปตรวจสอบข้อมูลการสมัครและการชำระเงินที่เมนูสถานะ')</script>";
        echo "<script>window.location.href='index.php'</script>";
    }
    mysqli_close($conn);
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
        <h2 class="text-secondary text-center mb-5">กรอกข้อมูลผู้สมัคร</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow rounded-4 p-3 mb-4">
                    <div style="width: 100%; text-align:center;">
                        <img src="img/logo โรงเรยีน.png" width="80px">
                    </div>
                    <div class="fw-bold text-center">
                        สมัครเข้าศึกษาต่อชั้นมัธยมศึกษาปีที่ 1 <br>
                        ประเภทห้องเรียนพิเศษ ประจำปีการศึกษา 2568 <br>
                        โรงเรียนวัชรวิทยา  จังหวัดกำแพงเพชร  สำนักงานเขตพื้นที่การศึกษามัธยมศึกษากำแพงเพชร

                    </div>
                    <hr>
                    <form action="php_insert_regis.php" method="post"  class="needs-validation" novalidate>
                        <strong>1. ประวัติส่วนตัว</strong>
                        <div class="row p-3">
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">เลขบัตรประจำตัวประชาชน</label>
                                <input type="text" name="code_id" id="" class="form-control" placeholder="กรอกชื่อ" value="<?=$_POST['code_id']?>" readonly style="background-color:#CCFF99;">
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom01" class="form-label">คำนำหน้า</label>
                                <select name="name_title" id="validationCustom01" class="form-select" required>
                                    <option value="" selected disabled>--เลือก--</option>
                                    <option value="เด็กชาย">เด็กชาย</option>
                                    <option value="เด็กหญิง">เด็กหญิง</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกคำนำหน้า
                                </div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom02" class="form-label">ชื่อ</label>
                                <input type="text" name="name" id="validationCustom02" class="form-control" placeholder="กรอกชื่อ" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อ</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-5">
                                <label for="validationCustom03" class="form-label">นามสกุล</label>
                                <input type="text" name="surname" id="validationCustom03" class="form-control" placeholder="กรอกนามสกุล" required>
                                <div class="invalid-feedback">*กรุณากรอกนามสกุล</div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom07" class="form-label">กำลังศึกษาอยู่ในระดับชั้นประถมศึกษาปีที่ 6 โรงเรียน</label>
                                <input type="text" name="school" id="validationCustom07" class="form-control" placeholder="กรอกชื่อโรงเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom05" class="form-label">อำเภอ</label>
                                <input type="text" name="nationality" id="validationCustom05" class="form-control" placeholder="กรอกอำเภอที่ตั้งโรงเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกอำเภอที่ตั้งโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom06" class="form-label">จังหวัด</label>
                                <input type="text" name="religion" id="validationCustom06" class="form-control" placeholder="กรอกจังหวัดที่ตั้งโรงเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกจังหวัดที่ตั้งโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom06" class="form-label">ผลการเรียนเฉลี่ย ป.4 และ ป.5</label>
                                <input type="text" name="religion" id="validationCustom06" class="form-control" placeholder="กรอกผลการเรียนเฉลี่ย ป.4 และ ป.5" required>
                                <div class="invalid-feedback">*กรุณากรอกผลการเรียนเฉลี่ย</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom04" class="form-label">วันเดือนปีเกิด ค.ศ.</label>
                                <input type="date" name="bdate" id="validationCustom04" class="form-control" required>
                                <div class="invalid-feedback">*กรุณากรอกวันเดือนปีเกิด</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-5">
                                <label for="validationCustom06" class="form-label">สถานที่เกิด</label>
                                <input type="text" name="religion" id="validationCustom06" class="form-control" placeholder="กรอกสถานที่เกิด" required>
                                <div class="invalid-feedback">*กรุณากรอกสถานที่เกิด</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom01" class="form-label">หมู่เลือด</label>
                                <select name="name_title" id="validationCustom01" class="form-select" required>
                                    <option value="" selected disabled>--เลือก--</option>
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
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกบ้านเลขที่" required>
                                <div class="invalid-feedback">*กรุณากรอกบ้านเลขที่</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">หมู่</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกหมู่" required>
                                <div class="invalid-feedback">*กรุณากรอกหมู่</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">ซอย</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกซอย" required>
                                <div class="invalid-feedback">*กรุณากรอกซอย</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">ถนน</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกถนน" required>
                                <div class="invalid-feedback">*กรุณากรอกถนน</div>
                            </div>
                            <?php
                                include 'dblink.php';
                                $sql_provinces = "SELECT * FROM provinces";
                                $query = mysqli_query($conn, $sql_provinces);
                            ?>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="provinces" class="form-label">จังหวัด</label>
                                <select name="name_title" id="provinces" class="form-select" required>
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
                                <select name="name_title" id="amphures" class="form-select" required>

                                </select>
                                <div class="invalid-feedback">*กรุณากรอกอำเภอ</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="districts" class="form-label">ตำบล</label>
                                <select name="name_title" id="districts" class="form-select" required>

                                </select>
                                <div class="invalid-feedback">*กรุณากรอกตำบล</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="zip_code" class="form-label">รหัสไปรษณีย์</label>
                                <input type="text" name="sub_district" id="zip_code" class="form-control" required>
                                <div class="invalid-feedback">*กรุณากรอกรหัสไปรษณีย์</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">เบอร์โทรศัพท์</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" maxlength="10" placeholder="กรอกเบอร์โทรศัพท์" required>
                                <div class="invalid-feedback">*กรุณากรอกเบอร์โทรศัพท์</div>
                            </div>
                            
                            <div class="my-3">
                                <strong>2. ข้อมูลบิดา มารดา</strong>
                            </div>
                            
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">ชื่อบิดา</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกชื่อบิดา" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อบิดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">นามสกุลบิดา</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกนามสกุลบิดา" required>
                                <div class="invalid-feedback">*กรุณากรอกนามสกุลบิดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">อาชีพบิดา</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกอาชีพบิดา" required>
                                <div class="invalid-feedback">*กรุณากรอกอาชีพบิดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">เบอร์โทรบิดา</label>
                                <input type="text" name="sub_district" id="validationCustom08" maxlength="10" class="form-control" placeholder="กรอกเบอร์โทรบิดา" required>
                                <div class="invalid-feedback">*กรุณากรอกเบอร์โทรบิดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">ชื่อมารดา</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกชื่อมารดา" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อมารดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">นามสกุลมารดา</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกนามสกุลมารดา" required>
                                <div class="invalid-feedback">*กรุณากรอกนามสกุลมารดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">อาชีพมารดา</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกอาชีพมารดา" required>
                                <div class="invalid-feedback">*กรุณากรอกอาชีพมารดา</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="validationCustom08" class="form-label">เบอร์โทรมารดา</label>
                                <input type="text" name="sub_district" id="validationCustom08" maxlength="10" class="form-control" placeholder="กรอกเบอร์โทรมารดา" required>
                                <div class="invalid-feedback">*กรุณากรอกเบอร์โทรมารดา</div>
                            </div>
                            

                            <div class="my-3">
                                <strong>3. เลือกแผนการเรียน</strong>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom01" class="form-label">ลำดับที่ 1</label>
                                <select name="name_title" id="validationCustom01" class="form-select" required>
                                    <option value="" selected disabled>--เลือก--</option>
                                    <option value="esmat">ห้องเรียนพิเศษโครงการ E-SMAT</option>
                                    <option value="สสวท">ห้องเรียนพิเศษโครงการห้องเรียน สสวท.</option>
                                    <option value="ep">ห้องเรียนพิเศษโครงการสองภาษา (English Program)</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกแผนการเรียนลำดับที่ 1
                                </div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom01" class="form-label">ลำดับที่ 2</label>
                                <select name="name_title" id="validationCustom01" class="form-select" required>
                                    <option value="" selected disabled>--เลือก--</option>
                                    <option value="esmat">ห้องเรียนพิเศษโครงการ E-SMAT</option>
                                    <option value="สสวท">ห้องเรียนพิเศษโครงการห้องเรียน สสวท.</option>
                                    <option value="ep">ห้องเรียนพิเศษโครงการสองภาษา (English Program)</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกแผนการเรียนลำดับที่ 2
                                </div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom01" class="form-label">ลำดับที่ 3</label>
                                <select name="name_title" id="validationCustom01" class="form-select" required>
                                    <option value="" selected disabled>--เลือก--</option>
                                    <option value="esmat">ห้องเรียนพิเศษโครงการ E-SMAT</option>
                                    <option value="สสวท">ห้องเรียนพิเศษโครงการห้องเรียน สสวท.</option>
                                    <option value="ep">ห้องเรียนพิเศษโครงการสองภาษา (English Program)</option>
                                </select>
                                <div class="invalid-feedback">
                                    *กรุณาเลือกแผนการเรียนลำดับที่ 3
                                </div>
                            </div>

                            <div class="my-3">
                                <strong>4. อัปโหลดเอกสาร</strong>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom01" class="form-label">สำเนาทะเบียนบ้านนักเรียน</label>
                                <input type="file" name="" id="" class="form-control">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom01" class="form-label">เอกสารแสดงผลการเรียนหน้า1</label>
                                <input type="file" name="" id="" class="form-control">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom01" class="form-label">เอกสารแสดงผลการเรียนหน้า2 (ถ้ามี)</label>
                                <input type="file" name="" id="" class="form-control">
                            </div>

                            <hr>
                            <div class="mt-3 text-center">
                                <a href="index.html" class="btn btn-warning"><i class="fa-solid fa-house"></i> กลับหน้าแรก</a>
                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-paper-plane"></i> ส่งข้อมูลสมัคร</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


    <!-- modal image notic -->
    <!-- <div id="mo-img">
      <div id="bg-mo"></div>
      <div class="mo-content">
        <div class="mo-img-img"></div>
        <button class="close-mo" id="btn-close"><i class="fa-solid fa-circle-xmark"></i></button>
      </div>
    </div> -->
    <!-- end modal image notic -->



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
      
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>
<?php include('script.php');?>