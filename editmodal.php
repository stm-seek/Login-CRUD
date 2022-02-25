<?php 
    include('connect.php');
?>

<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">

<div id="EditModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-body">กรุณาใส่ข้อมูลให้ครบสมบูรณ์</h5>
                <button type="button" class="btn btn-lg btn-light bg-transparent" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="save.php" name="frm_edit" method="POST">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">รหัสผู้ใช้งาน</label>
                        <input name="idz" readonly="readonly" id="idz" type="text" class="form-control item" >
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อผู้ใช้งาน</label>
                        <input name="username" id="username" type="text" class="form-control item">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">รหัสผู้ใช้งาน</label>
                        <input name="password" id="password" type="password" class="form-control item">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อ</label>
                        <input name="fname" id="fname" type="text" class="form-control item">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">นามสกุล</label>
                        <input name="lname" id="lname" type="text" class="form-control item">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">เบอร์โทรศัพท์</label>
                        <input name="phone" id="phone" type="text" class="form-control item">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">URL Facebook</label>
                        <input name="urlfacebook" id="urlfacebook" type="text" class="form-control item">
                    </div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-success" type="submit" name="update" value="บันทึกข้อมูล">
                <button type="button" class="btn btn-primary" data-dismiss="modal">ปิด</button>
            </div>
            </form>
        </div>

    </div>
</div>