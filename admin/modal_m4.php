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
<!-- Modal special Mภ-->
<div class="modal fade" id="ModalSpecial<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalModalSpecial<?=$value['code_id']?>" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalModalSpecial<?=$value['code_id']?>">เกียรติบัตรแสดงความสามารถพิเศษ ของ <span class="text-primary"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="../file/special/<?=$value['special_file']?>" width="100%">
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
<!-- Modal EditStatus General M4-->
<div class="modal fade" id="ModalEditStatusGn<?=$value['code_id']?>" tabindex="-1" aria-labelledby="exampleModalModalEditStatusGn<?=$value['code_id']?>" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h1 class="modal-title fs-5" id="exampleModalModalEditStatusGn<?=$value['code_id']?>">เปลี่ยนสถานะการสมัครของ <span class="text-success"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="edit_status_m4_general.php" method="post">
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

<!-- Modal edit M4-->
<div class="modal fade" id="ModalEdit<?=$value['code_id']?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalEdit<?=$value['code_id']?>" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h1 class="modal-title fs-5" id="exampleModalEdit<?=$value['code_id']?>">แก้ไขข้อมูลของ <span class="text-danger"><?=$value['title'].$value['name'].' '.$value['surname']?></span></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="php_edit_m4_general.php" method="post">
        <div class="modal-body">
          <strong>1. ประวัติส่วนตัว</strong>
            <div class="row p-3">
                <div class="col-12 mb-3">
                    <label for="" class="form-label">เลขบัตรประจำตัวประชาชน</label>
                    <input type="text" name="code_id" id="" class="form-control" maxlength="13" placeholder="กรอกชื่อ" value="<?=$value['code_id']?>" style="background-color:#CCFF99;">
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom01" class="form-label">คำนำหน้า</label>
                    <select name="title" id="validationCustom01" class="form-select" >
                        <option value="<?=$value['title']?>" selected><?=$value['title']?></option>
                        <option value="เด็กชาย">เด็กชาย</option>
                        <option value="เด็กหญิง">เด็กหญิง</option>
                    </select>
                    <div class="invalid-feedback">
                        *กรุณาเลือกคำนำหน้า
                    </div>
                </div>
                <div class="col-12 mb-3 col-lg-4">
                    <label for="validationCustom02" class="form-label">ชื่อ</label>
                    <input type="text" name="name" id="validationCustom02" class="form-control" placeholder="กรอกชื่อ"  value="<?=$value['name']?>">
                    <div class="invalid-feedback">*กรุณากรอกชื่อ</div>
                </div>
                <div class="col-12 mb-3 col-lg-5">
                    <label for="validationCustom03" class="form-label">นามสกุล</label>
                    <input type="text" name="surname" id="validationCustom03" class="form-control" placeholder="กรอกนามสกุล"  value="<?=$value['surname']?>">
                    <div class="invalid-feedback">*กรุณากรอกนามสกุล</div>
                </div>
                <div class="col-12 mb-3">
                    <label for="validationCustom07" class="form-label">กำลังศึกษาอยู่ในระดับชั้นประถมศึกษาปีที่ 6 โรงเรียน</label>
                    <input type="text" name="school_name" id="validationCustom07" class="form-control" placeholder="กรอกชื่อโรงเรียน" value="<?=$value['school_name']?>">
                    <div class="invalid-feedback">*กรุณากรอกชื่อโรงเรียน</div>
                </div>
                <div class="col-12 mb-3 col-lg-4">
                    <label for="validationCustom05" class="form-label">อำเภอ</label>
                    <input type="text" name="school_district" id="validationCustom05" class="form-control" placeholder="กรอกอำเภอที่ตั้งโรงเรียน" value="<?=$value['school_district']?>">
                    <div class="invalid-feedback">*กรุณากรอกอำเภอที่ตั้งโรงเรียน</div>
                </div>
                <div class="col-12 mb-3 col-lg-4">
                    <label for="validationCustom06" class="form-label">จังหวัด</label>
                    <input type="text" name="school_province" id="validationCustom06" class="form-control" placeholder="กรอกจังหวัดที่ตั้งโรงเรียน" value="<?=$value['school_province']?>">
                    <div class="invalid-feedback">*กรุณากรอกจังหวัดที่ตั้งโรงเรียน</div>
                </div>
                <div class="col-12 mb-3 col-lg-4">
                    <label for="validationCustom06" class="form-label">ผลการเรียนเฉลี่ย ป.4 และ ป.5</label>
                    <input type="text" name="grade" id="validationCustom06" class="form-control" placeholder="กรอกผลการเรียนเฉลี่ย ป.4 และ ป.5" value="<?=$value['grade']?>">
                    <div class="invalid-feedback">*กรุณากรอกผลการเรียนเฉลี่ย</div>
                </div>
                <div class="col-12 mb-3">
                    <label for="validationCustom06" class="form-label">ความสามารถพิเศษ</label>
                    <input type="text" name="spacial" id="validationCustom06" class="form-control" placeholder="กรอกความสามารถพิเศษ" value="<?=$value['spacial']?>">
                    <div class="invalid-feedback">*กรุณากรอกความสามารถพิเศษ</div>
                </div>
                <div class="col-12 mb-3 col-lg-4">
                    <label for="validationCustom04" class="form-label">วันเดือนปีเกิด ค.ศ.</label>
                    <input type="date" name="bdate" id="validationCustom04" class="form-control" value="<?=$value['bdate']?>">
                    <div class="invalid-feedback">*กรุณากรอกวันเดือนปีเกิด</div>
                </div>
                <div class="col-12 mb-3 col-lg-5">
                    <label for="validationCustom06" class="form-label">สถานที่เกิด</label>
                    <input type="text" name="station_bdate" id="validationCustom06" class="form-control" placeholder="กรอกสถานที่เกิด" value="<?=$value['station_bdate']?>">
                    <div class="invalid-feedback">*กรุณากรอกสถานที่เกิด</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom01" class="form-label">หมู่เลือด</label>
                    <select name="blood" id="validationCustom01" class="form-select" >
                        <option value="<?=$value['blood']?>" selected><?=$value['blood']?></option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                    <div class="invalid-feedback">
                        *กรุณาเลือกหมู่เลือด
                    </div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">บ้านเลขที่</label>
                    <input type="text" name="home_id" id="validationCustom08" class="form-control" placeholder="กรอกบ้านเลขที่" value="<?=$value['home_id']?>">
                    <div class="invalid-feedback">*กรุณากรอกบ้านเลขที่</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">หมู่</label>
                    <input type="text" name="home_group" id="validationCustom08" class="form-control" placeholder="กรอกหมู่" value="<?=$value['home_group']?>">
                    <div class="invalid-feedback">*กรุณากรอกหมู่</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">ซอย</label>
                    <input type="text" name="alley" id="validationCustom08" class="form-control" placeholder="กรอกซอย" value="<?=$value['alley']?>">
                    <div class="invalid-feedback">*กรุณากรอกซอย</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">ถนน</label>
                    <input type="text" name="street" id="validationCustom08" class="form-control" placeholder="กรอกถนน" value="<?=$value['street']?>">
                    <div class="invalid-feedback">*กรุณากรอกถนน</div>
                </div>
                
                <div class="col-12 mb-3 col-lg-3">
                    <label for="districts" class="form-label">ตำบล</label>
                    <input type="text" name="sub_district" id="validationCustom08" class="form-control" value="<?=$value['sub_district']?>">
                    <div class="invalid-feedback">*กรุณากรอกตำบล</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="amphures" class="form-label">อำเภอ</label>
                    <input type="text" name="district" id="validationCustom08" class="form-control" value="<?=$value['district']?>">
                    <div class="invalid-feedback">*กรุณากรอกอำเภอ</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="provinces" class="form-label">จังหวัด</label>
                    <input type="text" name="province" id="validationCustom08" class="form-control" value="<?=$value['province']?>">
                    <div class="invalid-feedback">*กรุณาเลือกจังหวัด</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="zip_code" class="form-label">รหัสไปรษณีย์</label>
                    <input type="text" name="post_code" id="validationCustom08" class="form-control" maxlength="5" value="<?=$value['post_code']?>">
                    <div class="invalid-feedback">*กรุณากรอกรหัสไปรษณีย์</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">เบอร์โทรศัพท์</label>
                    <input type="text" name="tel" id="validationCustom08" class="form-control" maxlength="10" placeholder="กรอกเบอร์โทรศัพท์" value="<?=$value['tel']?>">
                    <div class="invalid-feedback">*กรุณากรอกเบอร์โทรศัพท์</div>
                </div>
                
                <div class="my-3">
                    <strong>2. ข้อมูลบิดา มารดา</strong>
                </div>
                
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">ชื่อบิดา</label>
                    <input type="text" name="father_name" id="validationCustom08" class="form-control" placeholder="กรอกชื่อบิดา" value="<?=$value['father_name']?>">
                    <div class="invalid-feedback">*กรุณากรอกชื่อบิดา</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">นามสกุลบิดา</label>
                    <input type="text" name="father_surname" id="validationCustom08" class="form-control" placeholder="กรอกนามสกุลบิดา" value="<?=$value['father_surname']?>">
                    <div class="invalid-feedback">*กรุณากรอกนามสกุลบิดา</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">อาชีพบิดา</label>
                    <input type="text" name="father_occupation" id="validationCustom08" class="form-control" placeholder="กรอกอาชีพบิดา" value="<?=$value['father_occupation']?>">
                    <div class="invalid-feedback">*กรุณากรอกอาชีพบิดา</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">เบอร์โทรบิดา</label>
                    <input type="text" name="father_tel" id="validationCustom08" maxlength="10" class="form-control" placeholder="กรอกเบอร์โทรบิดา" value="<?=$value['father_tel']?>">
                    <div class="invalid-feedback">*กรุณากรอกเบอร์โทรบิดา</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">ชื่อมารดา</label>
                    <input type="text" name="mother_name" id="validationCustom08" class="form-control" placeholder="กรอกชื่อมารดา" value="<?=$value['mother_name']?>">
                    <div class="invalid-feedback">*กรุณากรอกชื่อมารดา</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">นามสกุลมารดา</label>
                    <input type="text" name="mother_surname" id="validationCustom08" class="form-control" placeholder="กรอกนามสกุลมารดา" value="<?=$value['mother_surname']?>">
                    <div class="invalid-feedback">*กรุณากรอกนามสกุลมารดา</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">อาชีพมารดา</label>
                    <input type="text" name="mother_occupation" id="validationCustom08" class="form-control" placeholder="กรอกอาชีพมารดา" value="<?=$value['mother_occupation']?>">
                    <div class="invalid-feedback">*กรุณากรอกอาชีพมารดา</div>
                </div>
                <div class="col-12 mb-3 col-lg-3">
                    <label for="validationCustom08" class="form-label">เบอร์โทรมารดา</label>
                    <input type="text" name="mother_tel" id="validationCustom08" maxlength="10" class="form-control" placeholder="กรอกเบอร์โทรมารดา" value="<?=$value['mother_tel']?>">
                    <div class="invalid-feedback">*กรุณากรอกเบอร์โทรมารดา</div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ยกเลิก</button>
          <button type="submit" class="btn btn-warning">ยืนยันแก้ไข</button>
        </div>
      </form>
    </div>
  </div>
</div>