<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/994507c3ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>getprint</title>
</head>

<body>
    <?php
        include "dblink.php";

        $p = intval($_GET['p']);
        
        mysqli_select_db($conn,"ajax_demo");
        $sql = "SELECT * FROM print_user WHERE user_id = '".$p."'";
        // $sql = "SELECT * FROM print_user WHERE user_id = '1659902675142'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if(isset($row["user_id"]) ==""){
                echo "ไม่พบข้อมูล";
        }else if($row['certificate'] == "0"){
            echo '
            <div class="card p-5">
                <h3 class="mb-3 fw-bold text-success text-center">'.$row["name"].' '.$row["lastname"].'</h3>
                <div class="row mb-3">
                    <div class="col-6 text-end">เลขที่นั่งสอบ :</div>
                    <div class="col-6 text-start fw-bold text-danger">'.$row["user_num"].'</div>
                </div>
                <div class="row mb-3">
                    <div class="col-6 text-end">โรงเรียน :</div>
                    <div class="col-6 text-start fw-bold text-danger">'.$row["school"].'</div>
                </div>
                <h4 class="text-center fw-bold text-danger"><i class="fa-solid fa-face-sad-tear"></i> คุณขาดสอบ</h4>
                
            </div>
            ';
        }else{
            
    ?>
    
    <div class="card p-5">
        <h3 class="mb-3 fw-bold text-success text-center"><?=$row["name"]?> <?=$row["lastname"]?></h3>
        <div class="row mb-3">
            <div class="col-6 text-end">เลขที่นั่งสอบ :</div>
            <div class="col-6 text-start fw-bold text-danger"><?=$row["user_num"]?></div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-end">โรงเรียน :</div>
            <div class="col-6 text-start fw-bold text-danger"><?=$row["school"]?></div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-end">คุณสอบได้ลำดับที่ :</div>
            <div class="col-6 text-start fw-bold text-danger"><?=$row["number"]?></div>
        </div>
        <div class="row mb-5">
            <div class="col-6 text-end">พิมพ์เกียรติบัตร :</div>
            <div class="col-6 text-start fw-bold">
                <a href="file/print_pdf/<?=$row["certificate"]?>" class="btn btn-warning" target="_blank"><i class="fa-solid fa-certificate"></i> เกียรติบัตร</a>
                <!-- <span class="text-secondary"><i>(ขณะนี้กำลังเตรียมไฟล์ข้อมูล)</i></span> -->
            </div>
        </div>
        <h4 class="text-center fw-bold text-primary">คะแนน</h4>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="text-center table-primary">
                    <tr>
                        <th>คณิตศาสตร์</th>
                        <th>วิทยาศาสตร์</th>
                        <th>ภาษาอังกฤษ</th>
                        <th>ภาษาไทย</th>
                        <th>คะแนนรวม</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr>
                        <td><?=$row["math"]?></td>
                        <td><?=$row["science"]?></td>
                        <td><?=$row["eng"]?></td>
                        <td><?=$row["thai"]?></td>
                        <td class="table-active"><?=$row["total"]?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php } 
    
    mysqli_close($conn); ?>
</body>

</html>