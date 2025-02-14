<?php
    include "../dblink.php";
    session_start();
    if ($_SESSION['admin'] != 'admin' && $_SESSION['password'] != 'Admin@WrPreM1'){
 
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
    
</head>
<body>
    
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

    <div class="container-fuid p-3">
        <h3 class="text-center text-secondary"><i class="fa-solid fa-house"></i> Home</h3>
        <hr class="mb-4">

        <div class="card p-3">
            <div class="table-responsive">
                <table id="example" class="table table-bordered table-striped table-hover">
                    <thead class="bg-warning">
                        <tr>
                            <th>ลำดับ</th>
                            <th>เลขประจำตัวประชาชน</th>
                            <th>ชื่อ-นามสกุล</th>
                            <th>โรงเรียน</th>
                            <th>เกรดเฉลี่ย</th>
                            <th>เบอร์โทร</th>
                            <th>วันที่กรอก</th>
                            <th>วันที่ชำระ</th>
                            <th>การชำระเงิน</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            $select_user = mysqli_query($conn,"SELECT * FROM register");
                            $n = 1;
                            while($row = mysqli_fetch_array($select_user)){
                        ?>
                        <tr>
                            <td><?=$n?></td>
                            <td><?=$row['code_id']?></td>
                            <td><?=$row['name_title'].$row['name']." ".$row['surname']?></td>
                            <td><?=$row['school']?></td>
                            <td><?=$row['grade']?></td>
                            <td><?=$row['tel']?></td>
                            <td><?=$row['time_st']?></td>
                            <td><?=$row['update_slip']?></td>
                            <td>
                                <?php
                                    if($row['slip']==null){
                                        echo "<span class='text-danger'><i class='fa-solid fa-circle-exclamation'></i> ยังไม่ชำระ</span>";
                                    }else{
                                ?>
                                <span class="text-success"><i class="fa-solid fa-circle-check"></i> ชำระแล้ว</span>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$row['id']?>">
                                    <i class="fa-solid fa-eye"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?=$row['id']?>" tabindex="-1" aria-labelledby="exampleModalLabel<?=$row['id']?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <img src="../file/slip/<?=$row['slip']?>" width="100%">
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#del<?=$row['id']?>">
                                    <i class="fa-solid fa-trash-can"></i> ลบ
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="del<?=$row['id']?>" tabindex="-1" aria-labelledby="dele<?=$row['id']?>" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header bg-danger">
                                                <h1 class="modal-title fs-5"><i class="fa-solid fa-circle-exclamation text-light"></i></h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        <form action="del_slip.php" method="post">
                                            <div class="modal-body">
                                                คุณแน่ใจไหมว่าจะลบหลักฐานการโอนเงินของ <span class="text-primary"><?=$row['name_title'].$row['name']." ".$row['surname']?></span>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
                                                <button type="submit" class="btn btn-danger">ตกลง</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?=$row['code_id']?>" class="btn btn-sm btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                            </td>
                        </tr>
                        <?php $n++; } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
    
    <script>
        new DataTable('#example');
    </script>
</body>
</html>