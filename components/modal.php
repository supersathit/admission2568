<!-- Modal M4 Detail -->
<div class="modal fade" id="staticBackdropM4" aria-hidden="true" aria-labelledby="staticBackdropLabelM4" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-info">
        <h1 class="modal-title fs-5" id="staticBackdropLabelM4">ชั้นมัธยมศึกษาปีที่ 4 ห้องเรียนปกติ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
          <strong>แผนการเรียนที่เปิดรับนักเรียน</strong> <br>
            1. แผนการเรียนศิลป์ - คำนวณ จำนวน 9 คน <br>
            2. แผนการเรียนศิลป์ - ภาษาจีน	จำนวน 18 คน <br>
            3. แผนการเรียนศิลป์สังคม – นิติ - รัฐศาสตร์	จำนวน 2 คน<br>
            4. แผนการเรียนศิลป์ - ภาษาอังกฤษ จำนวน 1 คน<br>
            5. แผนการเรียนศิลปกรรมศาสตร์ - การกีฬา จำนวน 23 คน<br><br>

            <strong>กรุณาเตรียมข้อมูลให้พร้อมในการกรอกข้อมูล</strong> <br>
            <strong>เอกสารที่ต้องเตรียมเพื่ออัปโหลด</strong><br>
            1. เอกสารแสดงผลการเรียน 5 ภาคเรียน <br>
            2. สำเนาทะเบียนบ้านนักเรียน <br>
            3. เกียรติบัตรรางวัลระดับเขตพื้นที่ขึ้นไป (สำหรับคนที่เลือกแผนการเรียนศิลปกรรมศาสตร์-การกีฬา)
        </p>

        <div class="text-center">
            <button class="btn btn-primary" data-bs-target="#ModalToggle2M4" data-bs-toggle="modal">เข้าใจแล้ว</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal check m4-->
<div class="modal fade" id="ModalToggle2M4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticModalToggle2M4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticModalToggle2M4">ชั้นมัธยมศึกษาปีที่ 4</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="regis_m4_general.php" method="post">
            <div class="modal-body">
                <p class="text-danger">ตรวจสอบเลขบัตรประจำตัวประชาชน</p>
                <input type="text" name="code_id" id="" maxlength="13" class="form-control" placeholder="กรอกเลขบัตรประชาชน 13 หลัก" OnKeyPress="return chkNumber(this)" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">ตกลง</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Confirm check m4-->
<div class="modal fade" id="ModalConfirmM4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticModalConfirmM4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticModalConfirmM4">ยืนยันสิทธิ์สมัครชั้นมัธยมศึกษาปีที่ 4</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="confirm_m4_general.php" method="get">
            <div class="modal-body">
                <p class="text-danger">ตรวจสอบเลขบัตรประจำตัวประชาชน</p>
                <input type="text" name="code_id" id="" maxlength="13" class="form-control" placeholder="กรอกเลขบัตรประชาชน 13 หลัก" OnKeyPress="return chkNumber(this)" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">ตกลง</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal M1 Detail -->
<div class="modal fade" id="staticBackdropM1" aria-hidden="true" aria-labelledby="staticBackdropLabelM1" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h1 class="modal-title fs-5 text-light" id="staticBackdropLabelM1">ชั้นมัธยมศึกษาปีที่ 1 ห้องเรียนปกติ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            กรุณาเตรียมข้อมูลให้พร้อมในการกรอกข้อมูล <br>
            <strong>เอกสารที่ต้องเตรียมเพื่ออัปโหลด</strong><br>
            1. เอกสารแสดงผลการเรียน ป.4 และ ป.5 <br>
            2. สำเนาทะเบียนบ้านนักเรียน <br>
            3. เกียรติบัตรรางวัลระดับเขตพื้นที่ขึ้นไป <span class="text-danger">(สำหรับคนที่เลือกความสามารถพิเศษ **เปิดรับในวันที่ 20-21 มี.ค. 2568 เท่านั้น)</span>
        </p>

        <div class="text-center">
            <button class="btn btn-primary" data-bs-target="#ModalToggle2M1" data-bs-toggle="modal">เข้าใจแล้ว</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal check m1-->
<div class="modal fade" id="ModalToggle2M1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticModalToggle2M1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticModalToggle2M1">ชั้นมัธยมศึกษาปีที่ 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="regis_m1_general.php" method="post">
            <div class="modal-body">
                <p class="text-danger">ตรวจสอบเลขบัตรประจำตัวประชาชน</p>
                <input type="text" name="code_id" id="" maxlength="13" class="form-control" placeholder="กรอกเลขบัตรประชาชน 13 หลัก" OnKeyPress="return chkNumber(this)" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">ตกลง</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Confirm check m1-->
<div class="modal fade" id="ModalConfirmM1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticModalConfirmM1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5" id="staticModalConfirmM1">ยืนยันสิทธิ์สมัครชั้นมัธยมศึกษาปีที่ 1</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="confirm_m1_general.php" method="get">
            <div class="modal-body">
                <p class="text-danger">ตรวจสอบเลขบัตรประจำตัวประชาชน</p>
                <input type="text" name="code_id" id="" maxlength="13" class="form-control" placeholder="กรอกเลขบัตรประชาชน 13 หลัก" OnKeyPress="return chkNumber(this)" required>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">ตกลง</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- Modal Closed -->
<div class="modal fade" id="ModalClose" aria-hidden="true" aria-labelledby="staticModalClose" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-danger">
        <h1 class="modal-title fs-5 text-light" id="staticModalClose">การรับสมัครห้องเรียนปกติ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            - <span class="text-danger">ขณะนี้ เราได้ปิดการรับสมัครแล้ว</span><br>
            - คนที่กรอกข้อมูลสมัครมาแล้ว ให้เข้าไปตรวจสอบผลการสมัคร<br>
            - หากสถานะสุดท้ายยังขึ้น <span class="text-warning">รอตรวจเอกสาร</span> ให้ท่านโปรดรอและตรวจสอบอีกครั้งในวันถัดไป <br>
            - หากเอกสารมีปัญหา จะมีเจ้าหน้าที่ติดต่อหาทันที <br>
            - หากมีข้อสงสัยสามารถสอบถามได้ที่ 👉 <a href="https://page.line.me/145xeekj" class="btn btn-success"><i class="fa-brands fa-line"></i> WR-Admission2568</a>
        </p>
      </div>
    </div>
  </div>
</div>

<!-- Modal before open -->
<div class="modal fade" id="ModalOpen" aria-hidden="true" aria-labelledby="staticModalClose" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h1 class="modal-title fs-5 text-dark" id="staticModalClose">การรับสมัครห้องเรียนปกติ</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>
            - <span class="text-dark">ขณะนี้ เราไม่ได้เปิดการรับสมัคร</span><br>
            - <span class="text-danger">เริ่มสมัครได้ในวันที่ 20 มีนาคม 2568 เวลา 08.30น. เป็นต้นไป</span><br>
            - หากมีข้อสงสัยสามารถสอบถามได้ที่ 👉 <a href="https://page.line.me/145xeekj" class="btn btn-success"><i class="fa-brands fa-line"></i> WR-Admission2568</a>
        </p>
      </div>
    </div>
  </div>
</div>