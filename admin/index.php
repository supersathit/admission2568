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
    <div class="display mb-5">
        <div class="menu-left">
            <div class="text-center mb-5">
                <img src="../img/logo โรงเรยีน.png" width="70%">
            </div>
            <div class="left-nav p-2">
                <a href="index.php" class="active"><i class="fa-solid fa-chart-simple"></i> Dashbord</a>
                <a href="spacial-m1.php"><i class="fa-solid fa-flask"></i> พิเศษ ม.1</a>
                <a href="spacial-m4.php"><i class="fa-solid fa-flask-vial"></i> พิเศษ ม.4</a>
            </div>
        </div>
        <div class="content-right">
            <nav class="navbar navbar-expand-lg bg-info shadow mb-3">
                <div class="container">
                    <a href="index.php" class="navbar-brand">
                    <img src="../img/icon.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
                        Admin Admission WR
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
                            <span class="me-2"><i class="fa-solid fa-user-secret"></i> Admin Admission</span>
                            
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
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

            <div class="container-fuid p-4">
                <h3 class="text-secondary"><i class="fa-solid fa-gauge-high"></i> Dashboard</h3>
                <hr class="mb-4">

                <div class="row mb-5">
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <div class="card p-4 m-auto rounded-3 d-flex flex-row justify-content-between align-items-center c0 c1">
                            <div class="">
                                <h6 class="text-dark">ห้องเรียนพิเศษ ม.1</h6>
                                <h3>ทั้งหมด <span class="text-danger">1</span> คน</h3>
                            </div>
                            <div class="fs-1 text-secondary"><i class="fa-solid fa-users"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <div class="card p-4 m-auto rounded-3 d-flex flex-row justify-content-between align-items-center c0 c2">
                            <div class="">
                                <h6 class="text-dark">ห้องเรียนพิเศษ ม.1</h6>
                                <h3>วันนี้ <span class="text-danger">1</span> คน</h3>
                            </div>
                            <div class="fs-1 text-secondary"><i class="fa-solid fa-users"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <div class="card p-4 m-auto rounded-3 d-flex flex-row justify-content-between align-items-center c0 c3">
                            <div class="">
                                <h6 class="text-dark">ห้องเรียนพิเศษ ม.4</h6>
                                <h3>ทั้งหมด <span class="text-danger">1</span> คน</h3>
                            </div>
                            <div class="fs-1 text-secondary"><i class="fa-solid fa-users"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12 mb-3">
                        <div class="card p-4 m-auto rounded-3 d-flex flex-row justify-content-between align-items-center c0 c4">
                            <div class="">
                                <h6 class="text-dark">ห้องเรียนพิเศษ ม.4</h6>
                                <h3>วันนี้ <span class="text-danger">1</span> คน</h3>
                            </div>
                            <div class="fs-1 text-secondary"><i class="fa-solid fa-users"></i></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-12 mb-4">
                        <!-- chart -->
                        <div id="stat" class="bg-light card rounded-3 shadow p-3">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12 mb-4">
                        <div class="card rounded-3 p-2 shadow">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead class="text-center table-primary">
                                        <tr>
                                            <th rowspan="2">วันที่</th>
                                            <th colspan="3">มัธยมศึกษาปีที่ 1</th>
                                            <th colspan="3">มัธยมศึกษาปีที่ 4</th>
                                        </tr>
                                        <tr>
                                            <th>ในเขต</th>
                                            <th>นอกเขต</th>
                                            <th>รวม</th>
                                            <th>รวม</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <?php
                                        function in_m1($date1,$date2){
                                            include '../dblink.php';
                                            $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$date1' AND date_regis > '$date2' AND district = 'เมืองกำแพงเพชร'"));
                                            return $value['COUNT(*)'];
                                        }
                                        function out_m1($date1,$date2){
                                            include '../dblink.php';
                                            $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$date1' AND date_regis > '$date2' AND district != 'เมืองกำแพงเพชร'"));
                                            return $value['COUNT(*)'];
                                        }
                                        function c_m1($date1,$date2){
                                            include '../dblink.php';
                                            $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$date1' AND date_regis > '$date2' "));
                                            return $value['COUNT(*)'];
                                        }
                                        $total_in_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE district = 'เมืองกำแพงเพชร'"));
                                        $total_out_m1 = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE district != 'เมืองกำแพงเพชร'"));
                                        $total = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 "));
                                        $total_m4 = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m4 "));
                                        $c_M1_1 = c_m1("2025-02-15 16:30:00","2025-02-13 16:30:00");
                                        $c_M1_2 = c_m1("2025-02-16 16:30:00","2025-02-15 16:30:00");
                                        $c_M1_3 = c_m1("2025-02-17 16:30:00","2025-02-16 16:30:00");
                                        $c_M1_4 = c_m1("2025-02-18 16:30:00","2025-02-17 16:30:00");
                                        $c_M1_5 = c_m1("2025-02-19 16:30:00","2025-02-18 16:30:00");
                                        $in_M1_1 = in_m1("2025-02-15 16:30:00","2025-02-13 16:30:00");
                                        $in_M1_2 = in_m1("2025-02-16 16:30:00","2025-02-15 16:30:00");
                                        $in_M1_3 = in_m1("2025-02-17 16:30:00","2025-02-16 16:30:00");
                                        $in_M1_4 = in_m1("2025-02-18 16:30:00","2025-02-17 16:30:00");
                                        $in_M1_5 = in_m1("2025-02-19 16:30:00","2025-02-18 16:30:00");
                                        $out_M1_1 = out_m1("2025-02-15 16:30:00","2025-02-13 16:30:00");
                                        $out_M1_2 = out_m1("2025-02-16 16:30:00","2025-02-15 16:30:00");
                                        $out_M1_3 = out_m1("2025-02-17 16:30:00","2025-02-16 16:30:00");
                                        $out_M1_4 = out_m1("2025-02-18 16:30:00","2025-02-17 16:30:00");
                                        $out_M1_5 = out_m1("2025-02-19 16:30:00","2025-02-18 16:30:00");
                                        
                                        function m4($date1,$date2){
                                            include '../dblink.php';
                                            $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m4 WHERE date_regis <= '$date1' AND date_regis > '$date2' "));
                                            return $value['COUNT(*)'];
                                        }
                                        $M4_1 = m4("2025-02-15 16:30:00","2025-02-13 16:30:00");
                                        $M4_2 = m4("2025-02-16 16:30:00","2025-02-15 16:30:00");
                                        $M4_3 = m4("2025-02-17 16:30:00","2025-02-16 16:30:00");
                                        $M4_4 = m4("2025-02-18 16:30:00","2025-02-17 16:30:00");
                                        $M4_5 = m4("2025-02-19 16:30:00","2025-02-18 16:30:00");
                                    ?>
                                        <tr>
                                            <td>15 ก.พ. 68</td>
                                            <td><?=$in_M1_1?></td>
                                            <td><?=$out_M1_1?></td>
                                            <td><?=$c_M1_1?></td>
                                            <td><?=$M4_1?></td>
                                        </tr>
                                        <tr>
                                            <td>16 ก.พ. 68</td>
                                            <td><?=$in_M1_2?></td>
                                            <td><?=$out_M1_2?></td>
                                            <td><?=$c_M1_2?></td>
                                            <td><?=$M4_2?></td>
                                        </tr>
                                        <tr>
                                            <td>17 ก.พ. 68</td>
                                            <td><?=$in_M1_3?></td>
                                            <td><?=$out_M1_3?></td>
                                            <td><?=$c_M1_3?></td>
                                            <td><?=$M4_3?></td>
                                        </tr>
                                        <tr>
                                            <td>18 ก.พ. 68</td>
                                            <td><?=$in_M1_4?></td>
                                            <td><?=$out_M1_4?></td>
                                            <td><?=$c_M1_4?></td>
                                            <td><?=$M4_4?></td>
                                        </tr>
                                        <tr>
                                            <td>19 ก.พ. 68</td>
                                            <td><?=$in_M1_5?></td>
                                            <td><?=$out_M1_5?></td>
                                            <td><?=$c_M1_5?></td>
                                            <td><?=$M4_5?></td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td>รวม</td>
                                            <td><?=$total_in_m1["COUNT(*)"]?></td>
                                            <td><?=$total_out_m1["COUNT(*)"]?></td>
                                            <td><?=$total["COUNT(*)"]?></td>
                                            <td><?=$total_m4["COUNT(*)"]?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mb-3">
                        <div class="card rounded-3 p-2 shadow">
                            <h4 class="text-center">จำนวนที่สมัครรายวัน ห้องเรียนพิเศษ ม.1</h4>
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped">
                                    <thead class="text-center table-primary">
                                        <tr>
                                            <th rowspan="2">ห้อง</th>
                                            <th colspan="3">15 ก.พ. 68</th>
                                            <th colspan="3">16 ก.พ. 68</th>
                                            <th colspan="3">17 ก.พ. 68</th>
                                            <th colspan="3">18 ก.พ. 68</th>
                                            <th colspan="3">19 ก.พ. 68</th>
                                        </tr>
                                        <tr>
                                            <th>ในเขต</th>
                                            <th>นอกเขต</th>
                                            <th>รวม</th>
                                            <th>ในเขต</th>
                                            <th>นอกเขต</th>
                                            <th>รวม</th>
                                            <th>ในเขต</th>
                                            <th>นอกเขต</th>
                                            <th>รวม</th>
                                            <th>ในเขต</th>
                                            <th>นอกเขต</th>
                                            <th>รวม</th>
                                            <th>ในเขต</th>
                                            <th>นอกเขต</th>
                                            <th>รวม</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                    <?php
                                        function in($date1,$date2,$plan){
                                            include '../dblink.php';
                                            $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$date1' AND date_regis > '$date2' AND district = 'เมืองกำแพงเพชร' AND class1 = '$plan'"));
                                            return $value['COUNT(*)'];
                                        }
                                        function out($date1,$date2,$plan){
                                            include '../dblink.php';
                                            $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$date1' AND date_regis > '$date2' AND district != 'เมืองกำแพงเพชร' AND class1 = '$plan'"));
                                            return $value['COUNT(*)'];
                                        }
                                        function c($date1,$date2,$plan){
                                            include '../dblink.php';
                                            $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$date1' AND date_regis > '$date2' AND class1 = '$plan'"));
                                            return $value['COUNT(*)'];
                                        }
                                        
                                        $day1_1 = "2025-02-15 16:30:00";
                                        $day1_2 = "2025-02-14 16:30:00";
                                        $day2_1 = "2025-02-16 16:30:00";
                                        $day2_2 = "2025-02-15 16:30:00";
                                        $day3_1 = "2025-02-17 16:30:00";
                                        $day3_2 = "2025-02-16 16:30:00";
                                        $day4_1 = "2025-02-18 16:30:00";
                                        $day4_2 = "2025-02-17 16:30:00";
                                        $day5_1 = "2025-02-19 16:30:00";
                                        $day5_2 = "2025-02-18 16:30:00";
                                        
                                    ?>
                                        
                                        <tr>
                                            <td>EP</td>
                                            <td><?=in($day1_1,$day1_2,"ep")?></td>
                                            <td><?=out($day1_1,$day1_2,"ep")?></td>
                                            <td><?=c($day1_1,$day1_2,"ep")?></td>
                                            <td><?=in($day2_1,$day2_2,"ep")?></td>
                                            <td><?=out($day2_1,$day2_2,"ep")?></td>
                                            <td><?=c($day2_1,$day2_2,"ep")?></td>
                                            <td><?=in($day3_1,$day3_2,"ep")?></td>
                                            <td><?=out($day3_1,$day3_2,"ep")?></td>
                                            <td><?=c($day3_1,$day3_2,"ep")?></td>
                                            <td><?=in($day4_1,$day4_2,"ep")?></td>
                                            <td><?=out($day4_1,$day4_2,"ep")?></td>
                                            <td><?=c($day4_1,$day4_2,"ep")?></td>
                                            <td><?=in($day5_1,$day5_2,"ep")?></td>
                                            <td><?=out($day5_1,$day5_2,"ep")?></td>
                                            <td><?=c($day5_1,$day5_2,"ep")?></td>
                                        </tr>
                                        <tr>
                                            <td>สสวท.</td>
                                            <td><?=in($day1_1,$day1_2,"สสวท")?></td>
                                            <td><?=out($day1_1,$day1_2,"สสวท")?></td>
                                            <td><?=c($day1_1,$day1_2,"สสวท")?></td>
                                            <td><?=in($day2_1,$day2_2,"สสวท")?></td>
                                            <td><?=out($day2_1,$day2_2,"สสวท")?></td>
                                            <td><?=c($day2_1,$day2_2,"สสวท")?></td>
                                            <td><?=in($day3_1,$day3_2,"สสวท")?></td>
                                            <td><?=out($day3_1,$day3_2,"สสวท")?></td>
                                            <td><?=c($day3_1,$day3_2,"สสวท")?></td>
                                            <td><?=in($day4_1,$day4_2,"สสวท")?></td>
                                            <td><?=out($day4_1,$day4_2,"สสวท")?></td>
                                            <td><?=c($day4_1,$day4_2,"สสวท")?></td>
                                            <td><?=in($day5_1,$day5_2,"สสวท")?></td>
                                            <td><?=out($day5_1,$day5_2,"สสวท")?></td>
                                            <td><?=c($day5_1,$day5_2,"สสวท")?></td>
                                        </tr>
                                        <tr>
                                            <td>E-SMAT</td>
                                            <td><?=in($day1_1,$day1_2,"esmat")?></td>
                                            <td><?=out($day1_1,$day1_2,"esmat")?></td>
                                            <td><?=c($day1_1,$day1_2,"esmat")?></td>
                                            <td><?=in($day2_1,$day2_2,"esmat")?></td>
                                            <td><?=out($day2_1,$day2_2,"esmat")?></td>
                                            <td><?=c($day2_1,$day2_2,"esmat")?></td>
                                            <td><?=in($day3_1,$day3_2,"esmat")?></td>
                                            <td><?=out($day3_1,$day3_2,"esmat")?></td>
                                            <td><?=c($day3_1,$day3_2,"esmat")?></td>
                                            <td><?=in($day4_1,$day4_2,"esmat")?></td>
                                            <td><?=out($day4_1,$day4_2,"esmat")?></td>
                                            <td><?=c($day4_1,$day4_2,"esmat")?></td>
                                            <td><?=in($day5_1,$day5_2,"esmat")?></td>
                                            <td><?=out($day5_1,$day5_2,"esmat")?></td>
                                            <td><?=c($day5_1,$day5_2,"esmat")?></td>
                                        </tr>
                                        <tr class="fw-bold">
                                            <td>รวม(รายวัน)</td>
                                            <td></td>
                                            <td></td>
                                            <td><?=$c_M1_1?></td>
                                            <td></td>
                                            <td></td>
                                            <td><?=$c_M1_2?></td>
                                            <td></td>
                                            <td></td>
                                            <td><?=$c_M1_3?></td>
                                            <td></td>
                                            <td></td>
                                            <td><?=$c_M1_4?></td>
                                            <td></td>
                                            <td></td>
                                            <td><?=$c_M1_5?></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('menu-bottom.php'); ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script language="JavaScript">
      function chkNumber(ele)
      {
      var vchar = String.fromCharCode(event.keyCode);
      if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
      ele.onKeyPress=vchar;
      }
    </script>
    <?php
        function date_time_m1($date1,$date2){
          include '../dblink.php';
          $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1 WHERE date_regis <= '$date1' AND date_regis > '$date2' "));
          return $value['COUNT(*)'];
        }
        $dayM1_1 = date_time_m1("2025-02-15 16:30:00","2025-02-13 16:30:00");
        $dayM1_2 = date_time_m1("2025-02-16 16:30:00","2025-02-15 16:30:00");
        $dayM1_3 = date_time_m1("2025-02-17 16:30:00","2025-02-16 16:30:00");
        $dayM1_4 = date_time_m1("2025-02-18 16:30:00","2025-02-17 16:30:00");
        $dayM1_5 = date_time_m1("2025-02-19 16:30:00","2025-02-18 16:30:00");
        
        function date_time_m4($date1,$date2){
          include '../dblink.php';
          $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m4 WHERE date_regis <= '$date1' AND date_regis > '$date2' "));
          return $value['COUNT(*)'];
        }
        $dayM4_1 = date_time_m4("2025-02-15 16:30:00","2025-02-13 16:30:00");
        $dayM4_2 = date_time_m4("2025-02-16 16:30:00","2025-02-15 16:30:00");
        $dayM4_3 = date_time_m4("2025-02-17 16:30:00","2025-02-16 16:30:00");
        $dayM4_4 = date_time_m4("2025-02-18 16:30:00","2025-02-17 16:30:00");
        $dayM4_5 = date_time_m4("2025-02-19 16:30:00","2025-02-18 16:30:00");
      ?>

    <script type="text/javascript">

      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
            '15 ก.พ. 68', 
            '16 ก.พ. 68', 
            '17 ก.พ. 68', 
            '18 ก.พ. 68', 
            '19 ก.พ. 68'
          ],
          datasets: [{
            label: 'ห้องเรียนพิเศษ ม.1',
            data: [<?=$dayM1_1?>, <?=$dayM1_2?>, <?=$dayM1_3?>, <?=$dayM1_4?>, <?=$dayM1_5?>],
            borderWidth: 1,
            borderColor: 'rgb(235, 54, 196)',
            backgroundColor: 'rgba(235, 54, 160, 0.2)'
          },{
            label: 'ห้องเรียนพิเศษ ม.4',
            data : [<?=$dayM4_1?>, <?=$dayM4_2?>, <?=$dayM4_3?>, <?=$dayM4_4?>, <?=$dayM4_5?>],
            borderWidth: 1,
            borderColor: 'rgb(54, 162, 235)',
            backgroundColor: 'rgba(54, 162, 235, 0.2)'
          }]
        },
        options: {
        responsive: true,
        plugins: {
          legend: {
            position: 'top',
          },
          title: {
            display: true,
            text: 'จำนวนนักเรียนที่สมัครห้องเรียนพิเศษ รายวัน'
          }
        }
      },
      });
    
    </script>
</body>
</html>