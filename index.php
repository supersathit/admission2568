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
        <p class="text-center text-danger">เพื่อความสะดวก ท่านสามารถติดต่อได้ทาง Line : <a href="https://page.line.me/145xeekj" class="btn btn-success"><i class="fa-regular fa-hand-pointer"></i> <i class="fa-brands fa-line"></i> WR-Admission2568</a></p>
      </div>


      <!-- สมัครห้องเรียนพิเศษ -->
      <!-- <div class="row justify-content-center mb-3">

        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <div class="card shadow rounded-4 p-2">
            <h4 class="fw-bold mt-2 text-center">ชั้นมัธยมศึกษาปีที่ 1</h4>
            <p class="text-center">ประเภท : ห้องเรียนพิเศษ</p>
            <button type="button" class="btn btn-lg btn-success" data-bs-toggle="modal" id="openModalM1" data-bs-target="#staticBackdropM1">
              <i class="fa-solid fa-right-to-bracket fs-2"></i><br> ต้องการสมัคร <br>ชั้นมัธยมศึกษาปีที่ 1
            </button>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-12 mb-3">
          <div class="card shadow rounded-4 p-2">
            <h4 class="fw-bold mt-2 text-center">ชั้นมัธยมศึกษาปีที่ 4</h4>
            <p class="text-center">ประเภท : ห้องเรียนพิเศษ</p>
            <button type="button" class="btn btn-lg btn-info" data-bs-toggle="modal" id="openModalM4" data-bs-target="#staticBackdropM4">
              <i class="fa-solid fa-right-to-bracket fs-2"></i><br> ต้องการสมัคร <br>ชั้นมัธยมศึกษาปีที่ 4
            </button>

          </div>
        </div>

      </div> -->

      <!-- สมัครห้องเรียนปกติ -->
      <div class="row justify-content-center mb-3">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
          <div class="card shadow rounded-4 p-2">
            <h4 class="fw-bold mt-2 text-center">ชั้นมัธยมศึกษาปีที่ 1</h4>
            <p class="text-center">ประเภท : ห้องเรียนปกติ</p>
            <button type="button" class="btn btn-lg btn-success" data-bs-toggle="modal" id="openModalM1" data-bs-target="#staticBackdropM1">
              <i class="fa-solid fa-right-to-bracket fs-2"></i><br> ต้องการสมัคร <br>ชั้นมัธยมศึกษาปีที่ 1
            </button>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
          <div class="card shadow rounded-4 p-2">
            <h4 class="fw-bold mt-2 text-center">ชั้นมัธยมศึกษาปีที่ 4</h4>
            <p class="text-center">ประเภท : ห้องเรียนปกติ</p>
            <button type="button" class="btn btn-lg btn-info" data-bs-toggle="modal" id="openModalM4" data-bs-target="#staticBackdropM4">
              <i class="fa-solid fa-right-to-bracket fs-2"></i><br> ต้องการสมัคร <br>ชั้นมัธยมศึกษาปีที่ 4
            </button>
          </div>
        </div>
      </div>

      <div class="row justify-content-center mb-3">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
          <div class="card shadow rounded-4 p-2">
            <h4 class="fw-bold mt-2 text-center">ยืนยันสิทธิ์<br>ชั้นมัธยมศึกษาปีที่ 1</h4>
            <p class="text-center">ประเภท : ห้องเรียนปกติ</p>
            <button type="button" class="btn btn-lg btn-warning" data-bs-toggle="modal" id="openModalM1" data-bs-target="#ModalConfirmM1">
              <i class="fa-solid fa-right-to-bracket fs-2"></i><br> ยืนยันสิทธิ์สำหรับคนที่เคยสมัครห้องเรียนพิเศษแล้ว<br>ชั้นมัธยมศึกษาปีที่ 1
            </button>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
          <div class="card shadow rounded-4 p-2">
            <h4 class="fw-bold mt-2 text-center">ยืนยันสิทธิ์<br>ชั้นมัธยมศึกษาปีที่ 4</h4>
            <p class="text-center">ประเภท : ห้องเรียนปกติ</p>
            <button type="button" class="btn btn-lg btn-primary" data-bs-toggle="modal" id="openModalM4" data-bs-target="#ModalConfirmM4">
              <i class="fa-solid fa-right-to-bracket fs-2"></i><br> ยืนยันสิทธิ์สำหรับคนที่เคยสมัครห้องเรียนพิเศษแล้ว<br>ชั้นมัธยมศึกษาปีที่ 4
            </button>
          </div>
        </div>
      </div>

      <div id="status" class="row justify-content-center mb-2">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 mb-3">
          <div class="card shadow rounded-4 p-3">
            <h4 class="fw-bold text-center">ตรวจสอบสถานะการสมัคร ม.1</h4>
            <p class="fw-bold text-center">สามารถตรวจสอบสถานะการสมัครห้องเรียนปกติโดยการกรอกเลขประจำตัวประชาชน</p>
            <form action="status_m1_general.php" method="get" class="p-3 bg-light">
              <div class="input-group">
                <input type="text" name="code_id" class="form-control form-control-lg" placeholder="กรอกเลขบัตรประชาชนที่สมัครแล้ว" maxlength="13" OnKeyPress="return chkNumber(this)" aria-label="Example text with button addon" aria-describedby="button-addon1">
                <button class="btn btn-warning" type="submit" id="button-addon1">ตรวจสอบ</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="row justify-content-center mb-5">
        <div class="col-lg-8 col-md-12 col-sm-12 col-12 mb-3">
          <div class="card shadow rounded-4 p-3">
            <h4 class="fw-bold text-center">ตรวจสอบสถานะการสมัคร ม.4</h4>
            <p class="fw-bold text-center">สามารถตรวจสอบสถานะการสมัครห้องเรียนปกติโดยการกรอกเลขประจำตัวประชาชน</p>
            <form action="status_m4_general.php" method="get" class="p-3 bg-light">
              <div class="input-group">
                <input type="text" name="code_id" class="form-control form-control-lg" placeholder="กรอกเลขบัตรประชาชนที่สมัครแล้ว" maxlength="13" OnKeyPress="return chkNumber(this)" aria-label="Example text with button addon" aria-describedby="button-addon1">
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
    <?php include 'components/footer.php';?>

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
          include 'dblink.php';
          $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m1_general WHERE date_regis <= '$date1' AND date_regis > '$date2' "));
          return $value['COUNT(*)'];
        }
        $dayM1_1 = date_time_m1("2025-03-20 16:30:00","2025-03-19 16:30:00");
        $dayM1_2 = date_time_m1("2025-03-21 16:30:00","2025-03-20 16:30:00");
        $dayM1_3 = date_time_m1("2025-03-22 16:30:00","2025-03-21 16:30:00");
        $dayM1_4 = date_time_m1("2025-03-23 16:30:00","2025-03-22 16:30:00");
        $dayM1_5 = date_time_m1("2025-03-24 16:30:00","2025-03-23 16:30:00");
        
        function date_time_m4($date1,$date2){
          include 'dblink.php';
          $value = mysqli_fetch_array(mysqli_query($conn,"SELECT COUNT(*) FROM regis_m4_general WHERE date_regis <= '$date1' AND date_regis > '$date2' "));
          return $value['COUNT(*)'];
        }
        $dayM4_1 = date_time_m4("2025-03-20 16:30:00","2025-03-19 16:30:00");
        $dayM4_2 = date_time_m4("2025-03-21 16:30:00","2025-03-20 16:30:00");
        $dayM4_3 = date_time_m4("2025-03-22 16:30:00","2025-03-21 16:30:00");
        $dayM4_4 = date_time_m4("2025-03-23 16:30:00","2025-03-22 16:30:00");
        $dayM4_5 = date_time_m4("2025-03-24 16:30:00","2025-03-23 16:30:00");
      ?>

    <script type="text/javascript">

      const ctx = document.getElementById('myChart');

      new Chart(ctx, {
        type: 'bar',
        data: {
          labels: [
            '20 มี.ค. 68', 
            '21 มี.ค. 68', 
            '22 มี.ค. 68', 
            '23 มี.ค. 68', 
            '24 มี.ค. 68'
          ],
          datasets: [{
            label: 'มัธยมศึกษาปีที่ 1',
            data: [<?=$dayM1_1?>, <?=$dayM1_2?>, <?=$dayM1_3?>, <?=$dayM1_4?>, <?=$dayM1_5?>],
            borderWidth: 1,
            borderColor: 'rgb(235, 54, 196)',
            backgroundColor: 'rgba(235, 54, 160, 0.2)'
          },{
            label: 'มัธยมศึกษาปีที่ 4',
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
            text: 'จำนวนนักเรียนที่สมัครห้องเรียนปกติ รายวัน'
          }
        }
      },
      });
    
      // $(window).on('load', function() {
      //     $('#exampleModal').modal('show');
      // });

      function myFunction1(){
        document.getElementById("openModalM1").setAttribute("data-bs-target","#ModalClose");
        document.getElementById("openModalM4").setAttribute("data-bs-target","#ModalClose");
      }
      function myFunction2(){
        document.getElementById("openModalM1").setAttribute("data-bs-target","#staticBackdropM1");
        document.getElementById("openModalM4").setAttribute("data-bs-target","#staticBackdropM4");
      }
      function myFunction3(){
        document.getElementById("openModalM1").setAttribute("data-bs-target","#ModalOpen");
        document.getElementById("openModalM4").setAttribute("data-bs-target","#ModalOpen");
      }
      
      let a = new Date("2025-03-24T09:30:00Z")
      let b = new Date()
      let c = new Date("2025-03-20T02:30:00Z")
      if(b < c){
        myFunction3();
      }else if(b > a){
        myFunction1()
      }else{
        myFunction2();
      }
      console.log(a);
      console.log(b);
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>