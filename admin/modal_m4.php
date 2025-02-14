<!-- Modal home_id M4-->
<div class="modal fade" id="ModalHome<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalHome<?=$value['code_id']?>" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalHome<?=$value['code_id']?>">สำเนาทะเบียนบ้านของ <span class="text-primary"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../file/house/<?=$value['house_regis']?>" width="100%">
      </div>
    </div>
  </div>
</div>

<!-- Modal grade1 M4-->
<div class="modal fade" id="ModalGrade1<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalGrade1<?=$value['code_id']?>" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalGrade1<?=$value['code_id']?>">เอกสารแสดงผลการเรียนของ <span class="text-primary"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../file/grade1/<?=$value['grade_file1']?>" width="100%">
      </div>
    </div>
  </div>
</div>
<!-- Modal grade2 M4-->
<div class="modal fade" id="ModalGrade2<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalModalGrade2<?=$value['code_id']?>" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalModalGrade2<?=$value['code_id']?>">เอกสารแสดงผลการเรียนหน้า 2 ของ <span class="text-primary"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../file/grade2/<?=$value['grade_file2']?>" width="100%">
      </div>
    </div>
  </div>
</div>

<!-- Modal EditStatus M4-->
<div class="modal fade" id="ModalEditStatus<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalModalEditStatus<?=$value['code_id']?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h1 class="modal-title fs-5" id="exampleModalModalEditStatus<?=$value['code_id']?>">เปลี่ยนสถานะการสมัครของ <span class="text-success"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="edit_status_m4.php" method="post">
        <div class="modal-body">
            <div class="text-center d-flex justify-content-center py-2">
                <input type="text" name="code_id" value="<?=$value['code_id']?>" style="display: none;">
                <div class="m-1">
                  <input type="radio" class="btn-check" name="status" id="success-outlined" autocomplete="off" value="ผ่าน">
                  <label class="btn btn-outline-success" for="success-outlined">ผ่าน</label>
                </div>
                <div class="m-1">
                  <input type="radio" class="btn-check" name="status" id="danger-outlined" autocomplete="off" value="ไม่ผ่าน">
                  <label class="btn btn-outline-danger" for="danger-outlined">ไม่ผ่าน</label>
                </div>
                <div class="m-1">
                  <input type="radio" class="btn-check" name="status" id="warning-outlined" autocomplete="off" value="รอตรวจสอบเอกสาร">
                  <label class="btn btn-outline-warning" for="warning-outlined">รอตรวจสอบ</label>
                </div>
            </div>
        </div>
        <div class="modal-footer bg-light">
            <button type="submit" class="btn btn-primary">ยืนยัน</button>
        </div>
    </form>
    </div>
  </div>
</div>

