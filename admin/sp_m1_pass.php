<?php
    include "../dblink.php";
    session_start();
    if ($_SESSION['admin'] != 'admin' && $_SESSION['password'] != 'Admin@WrAdmission1234'){
 
        Header("Location: login.php");
   
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Admission</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="icon" href="../img/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">

            <div class="container-fuid p-4">
                <h3 class="text-secondary text-center"><i class="fa-solid fa-flask"></i> ห้องเรียนพิเศษ ม.1</h3>
                <hr class="mb-4">
                <div class="p-1 mb-3 text-center">
                    <form action="" method="get">
                        <button type="submit" name="total" value="total" class="btn btn-primary">ทั้งหมด</button>
                        <button type="submit" name="total" value="e-smat" class="btn btn-info">E-SMAT</button>
                        <button type="submit" name="total" value="ssvt" class="btn btn-warning">สสวท.</button>
                        <button type="submit" name="total" value="ep" class="btn btn-success">EP</button>
                    </form>
                </div>
                <?php
                                include '../dblink.php';
                                $total = @$_GET['total'];
                                if($total == "total"){
                                    $plan = "ทั้งหมด";
                                    $result = mysqli_query($conn,"SELECT * FROM regis_m1 where status = 'ผ่าน' ORDER BY date_regis");
                                    $total_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where status = 'ผ่าน'"));
                                    $in_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where district = 'เมืองกำแพงเพชร' and status = 'ผ่าน'"));
                                    $out_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where district != 'เมืองกำแพงเพชร' and status = 'ผ่าน'"));
                                }else if($total == "e-smat"){
                                    $plan = "E-SMAT";
                                    $result = mysqli_query($conn,"SELECT * FROM regis_m1 where class1 = 'esmat' and status = 'ผ่าน' ORDER BY date_regis");
                                    $total_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where class1 = 'esmat' and status = 'ผ่าน'"));
                                    $in_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where district = 'เมืองกำแพงเพชร' and class1 = 'esmat' and status = 'ผ่าน'"));
                                    $out_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where district != 'เมืองกำแพงเพชร' and class1 = 'esmat' and status = 'ผ่าน'"));
                                }else if($total == "ssvt"){
                                    $plan = "สสวท";
                                    $result = mysqli_query($conn,"SELECT * FROM regis_m1 where class1 = 'สสวท' and status = 'ผ่าน' ORDER BY date_regis");
                                    $total_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where class1 = 'สสวท' and status = 'ผ่าน'"));
                                    $in_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where district = 'เมืองกำแพงเพชร' and class1 = 'สสวท' and status = 'ผ่าน'"));
                                    $out_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where district != 'เมืองกำแพงเพชร' and class1 = 'สสวท' and status = 'ผ่าน'"));
                                }else if($total == "ep"){
                                    $plan = "EP";
                                    $result = mysqli_query($conn,"SELECT * FROM regis_m1 where class1 = 'ep' and status = 'ผ่าน' ORDER BY date_regis");
                                    $total_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where class1 = 'ep' and status = 'ผ่าน'"));
                                    $in_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where district = 'เมืองกำแพงเพชร' and class1 = 'ep' and status = 'ผ่าน'"));
                                    $out_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT count(*) FROM regis_m1 where district != 'เมืองกำแพงเพชร' and class1 = 'ep' and status = 'ผ่าน'"));
                                }
                                
                ?>
                <h4 class="mb-3">
                    แผนการเรียนที่คุณสมบัติผ่าน <span class="text-danger"><?=$plan?></span>
                    จำนวนทั้งหมด <span class="badge bg-primary"><?=$total_m1['count(*)']?></span> คน
                    / ในเขต <span class="badge bg-success"><?=$in_m1['count(*)']?></span> คน
                    / นอกเขต <span class="badge bg-warning"><?=$out_m1['count(*)']?></span> คน
                </h4>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead class="text-center table-primary">
                            <tr>
                                <th>ลำดับ</th>
                                <th>เลขประจำตัวประชาชน</th>
                                <th>ชื่อ-นามสกุล</th>
                                <th>โรงเรียน</th>
                                <th>เกตดเฉลี่ย</th>
                                <th>เบอร์โทร</th>
                                <th>วันที่สมัคร</th>
                                <th>อันดับ1</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                
                                $n = 1;
                                foreach ($result as $value) {
                            ?>
                            <tr>
                                <td><?=$n?></td>
                                <td><?=$value['code_id']?></td>
                                <td><?=$value['title'].$value['name'].' '.$value['surname']?></td>
                                <td><?=$value['school_name']?></td>
                                <td><?=$value['grade']?></td>
                                <td><?=$value['tel']?></td>
                                <td><?=$value['date_regis']?></td>
                                <td><?=$value['class1']?></td>
                            </tr>
                            <?php include 'modal_m1.php'; ?>
                            <?php $n++; } ?>
                        </tbody>
                    </table>
                </div>
            </div>
    
    

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    
</body>
</html>