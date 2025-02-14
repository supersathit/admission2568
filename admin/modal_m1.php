<!-- Modal home_id M1-->
<div class="modal fade" id="ModalHome<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">สำเนาทะเบียนบ้านของ <span class="text-primary"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../file/house/<?=$value['house_regis']?>" width="100%">
      </div>
    </div>
  </div>
</div>

<!-- Modal grade1 M1-->
<div class="modal fade" id="ModalGrade1<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">เอกสารแสดงผลการเรียนของ <span class="text-primary"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../file/grade1/<?=$value['grade_file1']?>" width="100%">
      </div>
    </div>
  </div>
</div>
<!-- Modal grade2 M1-->
<div class="modal fade" id="ModalGrade2<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">เอกสารแสดงผลการเรียนหน้า 2 ของ <span class="text-primary"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../file/grade2/<?=$value['grade_file2']?>" width="100%">
      </div>
    </div>
  </div>
</div>

<!-- Modal EditStatus M1-->
<div class="modal fade" id="ModalEditStatus<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h1 class="modal-title fs-5" id="exampleModalLabel">เปลี่ยนสถานะการสมัครของ <span class="text-success"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="edit_status.php" method="post">
        <div class="modal-body">
            <div class="text-center">
                <input type="text" name="code_id" value="<?=$value['code_id']?>" style="display: none;">
                <input type="radio" class="btn-check" name="status" id="success-outlined" autocomplete="off" value="ผ่าน">
                <label class="btn btn-outline-success" for="success-outlined">ผ่าน</label>

                <input type="radio" class="btn-check" name="status" id="danger-outlined" autocomplete="off" value="ไม่ผ่าน">
                <label class="btn btn-outline-danger" for="danger-outlined">ไม่ผ่าน</label>

                <input type="radio" class="btn-check" name="status" id="warning-outlined" autocomplete="off" value="รอตรวจสอบเอกสาร">
                <label class="btn btn-outline-warning" for="warning-outlined">รอตรวจสอบ</label>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">ยืนยัน</button>
        </div>
    </form>
    </div>
  </div>
</div>

