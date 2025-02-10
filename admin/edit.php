<?php

    include "../dblink.php";

    $code_id = $_GET['id'];

    $sql = "SELECT * FROM register WHERE code_id = $code_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

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
  <nav class="navbar navbar-expand-lg bg-warning shadow mb-5">
        <div class="container">
            <a href="index.php" class="navbar-brand">
            <img src="../img/icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                Admin Prem1 WR
            </a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="setting.php"><i class="fa-solid fa-gear"></i> setting</a>
                    </li>
                </ul>
                <div>
                    <span class="me-2"><i class="fa-solid fa-user-secret"></i> Admin PreM1</span>
                    
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Logout
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header bg-warning">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="fa-solid fa-triangle-exclamation text-light"></i></h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    <strong>คุณแน่ใจไหมว่าจะออกจากระบบ!!</strong>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                    <a href="logout.php" class="btn btn-danger">ยืนยัน</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <h2 class="text-secondary text-center mb-5">แก้ไขข้อมูลผู้สมัคร</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow rounded-4 p-3 mb-4">
                    <div style="width: 100%; text-align:center;">
                        <img src="../img/logo โรงเรยีน.png" width="80px">
                    </div>
                    
                    <form action="php_edit.php" method="post"  class="needs-validation" novalidate>
                        <strong>1. ประวัติส่วนตัว</strong>
                        <div class="row p-3">
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">เลขบัตรประจำตัวประชาชน</label>
                                <input type="text" name="code_id" id="" class="form-control" placeholder="กรอกชื่อ" value="<?=$row['code_id']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-3">
                                <label for="" class="form-label">คำนำหน้า</label>
                                <input type="text" name="name_title" id="" class="form-control" placeholder="คำนำหน้า" value="<?=$row['name_title']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">ชื่อ</label>
                                <input type="text" name="name" id="" class="form-control" placeholder="กรอกชื่อ" value="<?=$row['name']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-5">
                                <label for="" class="form-label">นามสกุล</label>
                                <input type="text" name="surname" id="" class="form-control" placeholder="กรอกนามสกุล" value="<?=$row['surname']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">วันเดือนปีเกิด ค.ศ.</label>
                                <input type="date" name="bdate" id="" class="form-control" value="<?=$row['bdate']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">สัญชาติ</label>
                                <input type="text" name="nationality" id="" class="form-control" placeholder="กรอกสัญชาติ" value="<?=$row['nationality']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">ศาสนา</label>
                                <input type="text" name="religion" id="" class="form-control" placeholder="กรอกศาสนา" value="<?=$row['religion']?>">
                            </div>
                            <div class="my-3">
                                <strong>2. ประวัติการศึกษา</strong>
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">กำลังศึกษาอยู่ในระดับชั้นประถมศึกษาปีที่ 6 โรงเรียน</label>
                                <input type="text" name="school" id="" class="form-control" placeholder="กรอกชื่อโรงเรียน" value="<?=$row['school']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">ตำบล</label>
                                <input type="text" name="sub_district" id="" class="form-control" placeholder="กรอกตำบลที่อยู่โรงเรียน" value="<?=$row['sub-district']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">อำเภอ</label>
                                <input type="text" name="district" id="" class="form-control" placeholder="กรอกอำเภอที่อยู่โรงเรียน" value="<?=$row['district']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">จังหวัด</label>
                                <input type="text" name="province" id="" class="form-control" placeholder="กรอกจังหวัดที่อยู่โรงเรียน" value="<?=$row['province']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">รหัสไปรษณีย์</label>
                                <input type="text" name="p_code" id="" class="form-control" maxlength="5" placeholder="กรอกรหัสไปรษณีย์" value="<?=$row['p_code']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">เบอร์โทรโรงเรียน</label>
                                <input type="text" name="s_tel" id="" class="form-control" maxlength="10" placeholder="กรอกเบอร์โทรโรงเรียน" value="<?=$row['s_tel']?>">
                            </div>
                            <div class="col-12 mb-3 col-lg-4">
                                <label for="" class="form-label">เบอร์มือถือนักเรียน</label>
                                <input type="text" name="tel" id="" class="form-control" maxlength="10" placeholder="กรอกเบอร์มือถือนักเรียน" value="<?=$row['tel']?>">
                            </div>
                            <div class="col-12 mb-3">
                                <label for="" class="form-label">ผลการเรียนเฉลี่ยรวม ชั้นประถมศึกษาปีที่ 4 และชั้นประถมศึกษาปีที่ 5 เท่ากับ</label>
                                <input type="text" name="grade" id="" class="form-control" placeholder="ผลการเรียนเฉลี่ย" value="<?=$row['grade']?>">
                            </div>
                            <hr>
                            <div class="mt-3 text-center">
                                <a href="index.html" class="btn btn-warning"><i class="fa-solid fa-house"></i> กลับหน้าแรก</a>
                                <button type="submit" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i> ยืนยันแก้ไข</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>