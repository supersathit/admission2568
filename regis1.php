<?php

    include "dblink.php";

    $code_id = $_POST['code-id'];

    $sql = "SELECT code_id FROM register WHERE code_id = $code_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    if(strlen($code_id) < 13){
        echo "<script>alert('คุณกรอกเลขบัตรประชาชนไม่ครบ 13 หลัก')</script>";
        echo "<script>window.location.href='index.html'</script>";
    }else if($row != ''){
        echo "<script>alert('คุณได้กรอกข้อมูลสมัครมาแล้วกรุณาไปตรวจสอบข้อมูลการสมัครและการชำระเงินที่เมนูสถานะ')</script>";
        echo "<script>window.location.href='index.html'</script>";
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
  </head>
  <body style="background-color: aliceblue;">
    <div class="header shadow mb-5">
      <img src="img/logo โรงเรยีน.png" height="40px">
      <div class="text-header" onclick="window.location.assign('index.html')">ระบบสมัครสอบ pre M.1 โรงเรียนวัชรวิทยา ปีการศึกษา 2568</div>
    </div>
    <div class="container">
        <h2 class="text-secondary text-center mb-5">กรอกข้อมูลผู้สมัคร</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow rounded-4 p-3 mb-4">
                    <div style="width: 100%; text-align:center;">
                        <img src="img/logo โรงเรยีน.png" width="80px">
                    </div>
                    <div class="fw-bold text-center">
                        สมัครสอบตามโครงการวัชรวิทยา  Pre M.1 ประจำปีการศึกษา 2568 <br>
                        วันศุกร์ที่ 13 ธันวาคม 2567 – วันพุธที่ 25 ธันวาคม 2567 <br>
                        โรงเรียนวัชรวิทยา  จังหวัดกำแพงเพชร  สำนักงานเขตพื้นที่การศึกษามัธยมศึกษากำแพงเพชร

                    </div>
                    <hr>
                    <form action="php_insert_regis.php" method="post"  class="needs-validation" novalidate>
                        <strong>1. ประวัติส่วนตัว</strong>
                        <div class="row p-3">
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">เลขบัตรประจำตัวประชาชน</label>
                                <input type="text" name="code_id" id="" class="form-control" placeholder="กรอกชื่อ" value="<?=$_POST['code-id']?>" readonly style="background-color:#CCFF99;">
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
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom04" class="form-label">วันเดือนปีเกิด ค.ศ.</label>
                                <input type="date" name="bdate" id="validationCustom04" class="form-control" required>
                                <div class="invalid-feedback">*กรุณากรอกวันเดือนปีเกิด</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom05" class="form-label">สัญชาติ</label>
                                <input type="text" name="nationality" id="validationCustom05" class="form-control" placeholder="กรอกสัญชาติ" required>
                                <div class="invalid-feedback">*กรุณากรอกสัญชาติ</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom06" class="form-label">ศาสนา</label>
                                <input type="text" name="religion" id="validationCustom06" class="form-control" placeholder="กรอกศาสนา" required>
                                <div class="invalid-feedback">*กรุณากรอกศาสนา</div>
                            </div>
                            <div class="my-3">
                                <strong>2. ประวัติการศึกษา</strong>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom07" class="form-label">กำลังศึกษาอยู่ในระดับชั้นประถมศึกษาปีที่ 6 โรงเรียน</label>
                                <input type="text" name="school" id="validationCustom07" class="form-control" placeholder="กรอกชื่อโรงเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกชื่อโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom08" class="form-label">ตำบล</label>
                                <input type="text" name="sub_district" id="validationCustom08" class="form-control" placeholder="กรอกตำบลที่อยู่โรงเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกตำบลที่อยู่ของโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom09" class="form-label">อำเภอ</label>
                                <input type="text" name="district" id="validationCustom09" class="form-control" placeholder="กรอกอำเภอที่อยู่โรงเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกอำเภอที่อยู่ของโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom10" class="form-label">จังหวัด</label>
                                <input type="text" name="province" id="validationCustom10" class="form-control" placeholder="กรอกจังหวัดที่อยู่โรงเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกจังหวัดที่อยู่ของโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom11" class="form-label">รหัสไปรษณีย์</label>
                                <input type="text" name="p_code" id="validationCustom11" class="form-control" maxlength="5" placeholder="กรอกรหัสไปรษณีย์" required>
                                <div class="invalid-feedback">*กรุณากรอกรหัสไปรษณีย์</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom012" class="form-label">เบอร์โทรโรงเรียน</label>
                                <input type="text" name="s_tel" id="validationCustom012" class="form-control" maxlength="10" placeholder="กรอกเบอร์โทรโรงเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกเบอร์โทรโรงเรียน</div>
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="validationCustom13" class="form-label">เบอร์มือถือนักเรียน</label>
                                <input type="text" name="tel" id="validationCustom13" class="form-control" maxlength="10" placeholder="กรอกเบอร์มือถือนักเรียน" required>
                                <div class="invalid-feedback">*กรุณากรอกเบอร์มือถือนักเรียน</div>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="validationCustom14" class="form-label">ผลการเรียนเฉลี่ยรวม ชั้นประถมศึกษาปีที่ 4 และชั้นประถมศึกษาปีที่ 5 เท่ากับ</label>
                                <input type="text" name="grade" id="validationCustom14" class="form-control" placeholder="ผลการเรียนเฉลี่ย" required>
                                <div class="invalid-feedback">*กรุณากรอกผลการเรียนเฉลี่ย</div>
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