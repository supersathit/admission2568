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
                <a href="index.php"><i class="fa-solid fa-chart-simple"></i> Dashbord</a>
                <a href="spacial-m1.php" class="active"><i class="fa-solid fa-flask"></i> พิเศษ ม.1</a>
                <a href="spacial-m4.php"><i class="fa-solid fa-flask-vial"></i> พิเศษ ม.4</a>
                <a href="general-m1.php"><i class="fa-solid fa-circle-user"></i> ปกติ ม.1</a>
                <a href="general-m4.php"><i class="fa-solid fa-circle-user"></i> ปกติ ม.4</a>
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
                <h3 class="text-secondary"><i class="fa-solid fa-flask"></i> ห้องเรียนพิเศษ ม.1</h3>
                <hr class="mb-4">
                <div class="p-1 mb-3">
                    <a href="sp_m1.php?total=total" class="btn btn-danger" target="_blank">กดเพื่อดูแยกรายการ</a>
                    <a href="sp_m1_pass.php?total=total" class="btn btn-success" target="_blank">กดเพื่อดูแยกรายการที่คุณสมบัติผ่าน</a>
                </div>
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
                                <th>อันดับ2</th>
                                <th>อันดับ3</th>
                                <th>เอกสารแนบ</th>
                                <th>สถานะ</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php
                                include '../dblink.php';
                                $result = mysqli_query($conn,"SELECT * FROM regis_m1 ORDER BY date_regis");
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
                                <td><?=$value['class2']?></td>
                                <td><?=$value['class3']?></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#ModalHome<?=$value['code_id']?>"><i class="fa-solid fa-house-user"></i></button>
                                    <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#ModalGrade1<?=$value['code_id']?>"><i class="fa-solid fa-file-lines"></i>1</button>
                                    <?php echo $value['grade_file2'] == '' ? "" : '<button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#ModalGrade2'.$value['code_id'].'"><i class="fa-solid fa-file-lines"></i>2</button>'; ?>
                                </td>
                                <td>
                                    <?php if($value['status'] == "ไม่ผ่าน"){echo "<span class='text-danger'><i class='fa-solid fa-circle-exclamation'></i> ไม่ผ่าน</span>";}else if($value['status'] == "ผ่าน"){echo '<span class="text-success"><i class="fa-solid fa-circle-check"></i> ผ่าน</span>';}else{echo '<span class="text-warning"><i class="fa-solid fa-hourglass-half"></i> รอตรวจ</span>';} ?>
                                    <button type="button" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#ModalEditStatus<?=$value['code_id']?>"><i class="fa-solid fa-gear"></i></button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-info"><i class="fa-solid fa-eye"></i></button>
                                    <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#ModalEdit<?=$value['code_id']?>"><i class="fa-solid fa-user-pen"></i></button>
                                    <button type="button" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                                </td>
                            </tr>
                            <?php include 'modal_m1.php'; ?>
                            <?php $n++; } ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    <?php include('menu-bottom.php'); ?>
    
    

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    
</body>
</html>