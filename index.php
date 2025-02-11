<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ระบบรับนักเรียน ปีการศึกษา 2568 โรงเรียนวัชรวิทยา</title>
  <script src="https://kit.fontawesome.com/994507c3ac.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="img/icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body class="body">
    <?php include('components/header.php'); ?>
    <div class="container mb-4">

      <div class="dark mb-5">
        <marquee>ยินดีต้อนรับเข้าสู่ระบบรับนักเรียน โรงเรียนวัชรวิทยา ปีการศึกษา 2568 มีข้อสงสัยติดต่อได้ที่ <span class="text-danger"> งานรับนักเรียน กลุ่มบริหารงานวิชาการ เบอร์โทร 062-408-4011</span></marquee>
      </div>
      
      <div class="row justify-content-center mb-3">
        <div class="col-3 col-md-2 col-lg-1">
          <img src="img/logo โรงเรยีน.png" width="100%">
        </div>
        <h3 class="text-center fw-bold">
          ระบบรับนักเรียนออนไลน์<br>
          ปีการศึกษา 2568<br>
          โรงเรียนวัชรวิทยา
        </h3>
        <p id="regis" class="text-center">93 ถนนเทศบาล 2 ตำบลในเมือง อำเภอเมืองกำแพงเพชร จังหวัดกำแพงเพชร 62000 <br>โทรศัพท์ 055 711 901</p>
      </div>

      <div class="row justify-content-center mb-3">

        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <div class="card shadow rounded-4 p-2">
            <!-- <div class="card-img1">
              <img src="img/pre school.png" width="100%" style="transition: 0.4s;">
            </div> -->
            <h4 class="fw-bold mt-2 text-center">ชั้นมัธยมศึกษาปีที่ 1</h4>
            <p class="text-center">ประเภท : ห้องเรียนพิเศษ</p>
            <button type="button" class="btn btn-lg btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropM1">
              <i class="fa-solid fa-right-to-bracket fs-2"></i><br> ต้องการสมัคร <br>ชั้นมัธยมศึกษาปีที่ 1
            </button>
            <!-- <a href="detail.php" class="btn btn-lg btn-success m-2"><i class="fa-solid fa-right-to-bracket fs-2"></i><br> ต้องการสมัคร <br>ชั้นมัธยมศึกษาปีที่ 1</a> -->
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <div class="card shadow rounded-4 p-2">
            <!-- <div class="card-img1">
              <img src="img/register.png" width="100%" style="transition: 0.4s;">
            </div> -->
            <h4 class="fw-bold mt-2 text-center">ชั้นมัธยมศึกษาปีที่ 4</h4>
            <p class="text-center">ประเภท : ห้องเรียนพิเศษ</p>
            <!-- <a href="" class="btn btn-warning m-2"><i class="fa-solid fa-address-card"></i> กรอกข้อมูลสมัคร</a> -->
            <!-- Button trigger modal -->
            <button id="status" type="button" class="btn btn-lg btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdropM4">
              <i class="fa-solid fa-right-to-bracket fs-2"></i><br> ต้องการสมัคร <br>ชั้นมัธยมศึกษาปีที่ 4
            </button>

          </div>
        </div>

      </div>
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 mb-3">
          <div class="card shadow rounded-4 p-3">
            <h4 class="fw-bold text-center">ตรวจสอบผลการสมัคร</h4>
            <p class="fw-bold text-center">สามารถตรวจสอบผลการสมัครได้ทุกขั้นตอนโดยการกรอกเลขประจำตัวประชาชน</p>
            <form action="" method="get" class="p-2 bg-light">
              <div class="input-group">
                <input type="text" class="form-control form-control-lg" placeholder="กรอกเลขบัตรประชาชนที่สมัครแล้ว" maxlength="13" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-warning" type="submit" id="button-addon1">ตรวจสอบ</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div id="carouselExampleIndicators" class="carousel slide mb-5" data-bs-ride="true">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner rounded-4 shadow">
          <div class="carousel-item active">
            <img src="img/header2.png" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="img/header2.png" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- chart -->
      <div id="stat" class="bg-light card rounded-3 shadow p-3">
        <canvas id="myChart"></canvas>
      </div>


    </div>
    <div class="container-fuid footer">
      <div class="bg-warning text-center p-3">
        <p>Copyright ©2025 โรงเรียนวัชรวิทยา. All rights reserved. Design by <a href="">sathit</a></p>
      </div>
    </div>

    <?php include('components/menu-bottom.php'); ?>


    <!-- Modal -->
    <div class="modal hide fade" id="exampleModal">
      <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content p-0">
          <div class="modal-body p-0 bg-secondary">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="youtube">
              <iframe class="responsive-iframe" src="https://www.youtube.com/embed/L8Rj9coX2gc?autoplay=1" title="แนะนำหลักสูตรห้องเรียนพิเศษ โรงเรียนวัชรวิทยา" allow='autoplay encrypted-media' allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
     <?php include('components/modal.php'); ?>


    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
            data: [12, 19, 3, 5, 2],
            borderWidth: 1,
            borderColor: 'rgb(235, 54, 196)',
            backgroundColor: 'rgba(235, 54, 160, 0.2)'
          },{
            label: 'ห้องเรียนพิเศษ ม.4',
            data : [5,6,8,7,3],
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
    
      $(window).on('load', function() {
          $('#exampleModal').modal('show');
      });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>