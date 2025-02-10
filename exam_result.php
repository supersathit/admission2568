<?php

    include "dblink.php";

    $code_id = $_GET['code_id'];

    $sql = "SELECT * FROM exam_result WHERE code_id = $code_id";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result);

    if(strlen($code_id) < 13){
        echo "<script>alert('คุณกรอกเลขบัตรประชาชนไม่ครบ 13 หลัก')</script>";
        echo "<script>window.location.href='index.html'</script>";
    }else if($row['code_id'] == ''){
        echo "<script>alert('ไม่พบข้อมูลเลขบัตรประชาชนนี้ในรายชื่อผู้มีสิทธิ์สอบ')</script>";
        echo "<script>window.location.href='index.html'</script>";
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
  </head>
  <body style="background-color: aliceblue;">
    <div class="header shadow mb-5">
      <img src="img/logo โรงเรยีน.png" height="40px">
      <div class="text-header" onclick="window.location.assign('index.html')">ระบบสมัครสอบ pre M.1 โรงเรียนวัชรวิทยา ปีการศึกษา 2568</div>
    </div>
    <div class="container">
        <h2 class="text-secondary text-center mb-5">ข้อมูลผู้มีสิทธิ์สอบ</h2>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow rounded-4 p-3 mb-4">
                    <div style="width: 100%; text-align:center;">
                        <img src="img/logo โรงเรยีน.png" width="80px">
                    </div>
                    <div class="fw-bold text-center">
                        คะแนนสอบตามโครงการวัชรวิทยา  Pre M.1 ประจำปีการศึกษา 2568 <br>
                        โรงเรียนวัชรวิทยา  จังหวัดกำแพงเพชร  สำนักงานเขตพื้นที่การศึกษามัธยมศึกษากำแพงเพชร

                    </div>
                    <hr>
                    <div class="card p-5">
                        <div class="row">
                            <div class="col-12 col-lg-6 col-md-6 text-md-end">ชื่อ - นามสกุล : </div>
                            <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['name_title'].$row['name']." ".$row['surname']?></strong></div>
                            <div class="col-12 col-lg-6 col-md-6 text-md-end">เลขบัตรประจำตัวประชาชน : </div>
                            <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['code_id']?></strong></div>
                            <div class="col-12 col-lg-6 col-md-6 text-md-end">เลขประจำตัวผู้เข้าสอบ : </div>
                            <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['test_id']?></strong></div>
                            <div class="col-12 col-lg-6 col-md-6 text-md-end">โรงเรียน : </div>
                            <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['school']?></strong></div>
                            <div class="col-12 col-lg-6 col-md-6 text-md-end">ลำดับที่ได้ประเภทคะแนนรวม : </div>
                            <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['numb']?></strong></div>
                            <?php if($row['top_math'] != 0){ ?>
                                    <div class="col-12 col-lg-6 col-md-6 text-md-end">ลำดับที่ได้ 10 อันดับสูงสุดคณิตศาสตร์ : </div>
                                    <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['top_math']?></strong></div>
                            <?php } ?>
                            <?php if($row['top_thai'] != 0){ ?>
                                    <div class="col-12 col-lg-6 col-md-6 text-md-end">ลำดับที่ได้ 10 อันดับสูงสุดภาษาไทย : </div>
                                    <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['top_thai']?></strong></div>
                            <?php } ?>
                            <?php if($row['top_science'] != 0){ ?>
                                    <div class="col-12 col-lg-6 col-md-6 text-md-end">ลำดับที่ได้ 10 อันดับสูงสุดวิทยาศาสตร์ : </div>
                                    <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['top_science']?></strong></div>
                            <?php } ?>
                            <?php if($row['top_eng'] != 0){ ?>
                                    <div class="col-12 col-lg-6 col-md-6 text-md-end">ลำดับที่ได้ 10 อันดับสูงสุดภาษาอังกฤษ : </div>
                                    <div class="col-12 col-lg-6 col-md-6"><strong class="text-bold text-primary"><?=$row['top_eng']?></strong></div>
                            <?php } ?>
                        </div>
                    </div>
                    <hr>
                    <p class="text-center"><strong>ผลคะแนนการสอบ</strong></p>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="width: 100%;">
                            <thead class="text-center table-info">
                                <tr>
                                    <th>วิชา</th>
                                    <th>คะแนนที่ได้</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>คณิตศาสตร์ (60 คะแนน)</td>
                                    <td><?=$row['math']?></td>
                                </tr>
                                <tr>
                                    <td>ภาษาไทย (40 คะแนน)</td>
                                    <td><?=$row['thai']?></td>
                                </tr>
                                <tr>
                                    <td>วิทยาศาสตร์ (50 คะแนน)</td>
                                    <td><?=$row['science']?></td>
                                </tr>
                                <tr>
                                    <td>ภาษาอังกฤษ (50 คะแนน)</td>
                                    <td><?=$row['eng']?></td>
                                </tr>
                                <tr class="fw-bold">
                                    <td>รวม (200 คะแนน)</td>
                                    <td><?=$row['total']?></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center"><a href="index.html" class="btn btn-warning"><i class="fa-solid fa-house"></i> Home</a></div>
                    </div>
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

    <?=mysqli_close($conn)?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>