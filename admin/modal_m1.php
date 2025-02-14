<!-- Modal home_id M1-->
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

<!-- Modal grade1 M1-->
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
<!-- Modal grade2 M1-->
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

<!-- Modal EditStatus M1-->
<div class="modal fade" id="ModalEditStatus<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h1 class="modal-title fs-5" id="exampleModal">เปลี่ยนสถานะการสมัครของ <span class="text-success"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="edit_status_m1.php" method="post">
        <div class="modal-body">
          <input type="text" name="code_id" value="<?=$value['code_id']?>" style="display: none;">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault1" value="ผ่าน">
            <label class="form-check-label" for="flexRadioDefault1">
              ผ่าน
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault2" value="ไม่ผ่าน">
            <label class="form-check-label" for="flexRadioDefault2">
              ไม่ผ่าน
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="flexRadioDefault3" value="รอตรวจสอบเอกสาร">
            <label class="form-check-label" for="flexRadioDefault3">
              รอตรวจ
            </label>
          </div>
        </div>
        <div class="modal-footer bg-light">
          <button type="submit" class="btn btn-primary">ยืนยัน</button>
        </div>
      </form>
    </div>
  </div>
</div>

