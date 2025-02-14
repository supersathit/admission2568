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
    <title>admin PreM1</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="icon" href="../img/icon.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="body">
    <div class="display">
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
                    <div class="col-lg-6 col-12">
                        <!-- chart -->
                        <div id="stat" class="bg-light card rounded-3 shadow p-3">
                            <canvas id="myChart"></canvas>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="card p-2">
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
                                        <th>ในเขต</th>
                                        <th>นอกเขต</th>
                                        <th>รวม</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <tr>
                                        <td>15 ก.พ. 68</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>16 ก.พ. 68</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>17 ก.พ. 68</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>18 ก.พ. 68</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>19 ก.พ. 68</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr class="fw-bold">
                                        <td>รวม</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

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
            data: [0, 0, 0, 0, 0],
            borderWidth: 1,
            borderColor: 'rgb(235, 54, 196)',
            backgroundColor: 'rgba(235, 54, 160, 0.2)'
          },{
            label: 'ห้องเรียนพิเศษ ม.4',
            data : [0, 0, 0, 0, 0],
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