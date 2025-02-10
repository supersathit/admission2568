<?php
     include "dblink.php";

     $code_id = $_GET['code-id'];
 
     $sql = "SELECT code_id FROM register WHERE code_id = $code_id";
     $result = mysqli_query($conn,$sql);
     $row = mysqli_fetch_array($result);
 
     if(strlen($code_id) < 13){
         echo "<script>alert('คุณกรอกเลขบัตรประชาชนไม่ครบ 13 หลัก')</script>";
         echo "<script>window.location.href='index.html'</script>";
     }else if($row == ''){
         echo "<script>alert('ไม่พบข้อมูลตามเลขบัตรประชาชนของคุณ โปรดตรวจสอบให้แน่ใจว่าพิมพ์ถูกทุกตัว หากท่านกรอกข้อมูลสมัครมาแล้วและมั่นใจว่าพิมพ์ถูก กรุณาติดต่อผู้ดูแลระบบเพื่อทำการตรวจสอบความถูกต้อง')</script>";
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
        <h4 class="text-center text-secondary my-5"><i class="fa-solid fa-hand-holding-dollar"></i> สถานะการสมัครและการชำระเงิน</h4>

        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="card shadow rounded-4 p-3 mb-4">
                    <div style="width: 100%; text-align:center;">
                        <img src="img/logo โรงเรยีน.png" width="80px">
                    </div>
                    <div class="fw-bold text-center">
                        โครงการวัชรวิทยา  Pre M.1 ประจำปีการศึกษา 2568 <br>
                        โรงเรียนวัชรวิทยา  จังหวัดกำแพงเพชร  สำนักงานเขตพื้นที่การศึกษามัธยมศึกษากำแพงเพชร

                    </div>
                    <hr>
                    <div class="text-center mb-3"><strong><i class="fa-solid fa-chart-simple"></i> สถานะการสมัคร</strong></div>
                    <?php
                        $user = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM register WHERE code_id = $code_id"));

                        
                    ?>
                    <div class="text-center mb-3">
                        <strong class="text-primary"><?=$user['name_title'].$user['name']." ".$user['surname']?></strong><br>
                        โรงเรียน <?=$user['school']?><br>
                        เบอร์โทร <?=$user['tel']?><br>
                        เกรดเฉลีย <?=$user['grade']?>
                    </div>
                    <table class="table table-bordered">
                        <thead class="text-center table-info">
                            <tr>
                                <th>รายการ</th>
                                <th>สถานะ</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center">การกรอกข้อมูลสมัคร</td>
                                <td class="text-success"><i class="fa-solid fa-circle-check"></i> กรอกข้อมูลสมัครเรียบร้อย</td>
                            </tr>
                            <tr>
                                <td class="text-center">การชำระค่าสมัคร</td>
                                <td>
                                    <?php
                                        $select_slip = mysqli_fetch_array(mysqli_query($conn,"SELECT * FROM register WHERE code_id = $code_id"));
                                        // echo $select_slip['slip'];
                                        if($select_slip['slip'] == ''){
                                            
                                    ?>
                                    <span class="text-danger"><i class="fa-solid fa-circle-exclamation"></i> ยังไม่ขำระค่าสมัคร</span>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdropSt">
                                        <i class="fa-solid fa-hand-pointer"></i> อัปโหลดหลักฐานการโอนเงิน
                                    </button>

                                    <!-- Modal check-->
                                    <div class="modal fade" id="staticBackdropSt" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelSt" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header bg-warning">
                                                    <h1 class="modal-title fs-5" id="staticBackdropLabelSt">โปรดเลือกไฟล์เพื่ออัปโหลด</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="status.php?code-id=<?=$code_id?>" method="post" enctype="multipart/form-data">
                                                <div class="modal-body">
                                                    <div class="mb-3">
                                                        <input type="text" value="<?=$code_id?>" name="code-id" style="display:none;">
                                                        <label for="formFile" class="form-label">เลือกไฟล์</label>
                                                        <input class="form-control" type="file" id="formFile" name="slip" required>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                                    <button type="submit" class="btn btn-success">ยืนยัน</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <?php 
                                    }else{
                                        echo "<span class='text-success'><i class='fa-solid fa-circle-check'></i> อัปโหลดหลักฐานการโอนเงินเรียบร้อย</span>";
                                    } 
                                    ?>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <?php  
                        if($select_slip['slip'] == ''){
                    ?>
                    <div class="d-flex justify-content-center mb-3">
                        <div class="card overflow-hidden" style="max-width: 350px;">
                            <img src="img/pay1.png" width="100%">
                        </div>
                    </div>
                    <?php } ?>
                    <div class="text-center"><a href="index.html" class="btn btn-warning"><i class="fa-solid fa-house"></i> Home</a></div>
                </div>
            </div>
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<?php

    $code = @$_POST['code-id'];
    if(isset($_FILES['slip'])){
        $code = $_POST['code-id'];
        $tmp_name =  $_FILES['slip']['tmp_name'];
        $locate_img ="file/slip/";
        $type = strrchr($_FILES['slip']['name'],".");
        $name_file =  $code.$type;
        move_uploaded_file($tmp_name,$locate_img.$name_file);



        $upload_slip = mysqli_query($conn,"UPDATE register SET slip = '$name_file' WHERE code_id = $code");

        if(isset($upload_slip)){
            echo "<script>alert('อัปโหลดหลักฐานการโอนเงินเรียบร้อย');</script>";
            echo "<script>window.location.href='status.php?code-id=".$code."'</script>";
        }
    }

    mysqli_close($conn);
?>
