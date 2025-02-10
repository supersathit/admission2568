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
    <title>getUser</title>
</head>

<body>
    <?php
        include "dblink.php";

        $q = intval($_GET['q']);
        
        mysqli_select_db($conn,"ajax_demo");
        $sql = "SELECT * FROM user_test WHERE user_id = '".$q."'";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result);

        if(isset($row["user_id"])==""){
            echo "ไม่พบข้อมูล";
            // echo "<script>alert('ไม่พบข้อมูล');</script>";
        }else{
    ?>
    
    <div class="card p-5">
        <h3 class="mb-3 fw-bold text-success"><?=$row["inname"].$row["name"]?> <?=$row["lastname"]?></h3>
        <div class="row mb-3">
            <div class="col-6 text-end">เลขที่นั่งสอบ :</div>
            <div class="col-6 text-start fw-bold text-danger"><?=$row["test_id"]?></div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-end">ห้องสอบที่ :</div>
            <div class="col-6 text-start fw-bold text-danger"><?=$row["class_id"]?></div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-end">เลขห้องสอบ :</div>
            <div class="col-6 text-start fw-bold text-danger"><?=$row["class_num"]?></div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-end">โรงเรียน :</div>
            <div class="col-6 text-start fw-bold text-danger"><?=$row["school"]?></div>
        </div>
        <div class="row mb-3">
            <div class="col-6 text-end">พิมพ์บัตรประจำตัวผู้เข้าสอบ :</div>
            <div class="col-6 text-start fw-bold">
                <a href="file/pdf/<?=$row["pdf"]?>" class="btn btn-warning"><i class="fa-solid fa-print"></i> พิมพ์บัตร</a>
            </div>
        </div>
    </div>

    <?php } 
    
    mysqli_close($conn); ?>
</body>

</html>