<?php 
    include('connect.php');
?>
<link rel="stylesheet" type="text/css" href="css/util.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
<!-- Modal -->
<div id="myModal-insert" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-body">กรุณาใส่ข้อมูลให้ครบสมบูรณ์</h5>
                <button type="button" class="btn btn-lg btn-light bg-transparent" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="frm_insert" method="POST">
                    <div class="form-group">
                        <label class="col-sm-3 control-label">รหัสผู้ใช้งาน</label>
                        <input name="id" type="text" class="form-control item" disabled>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อผู้ใช้งาน</label>
                        <input name="username" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ชื่อ</label>
                        <input name="fname" type="text" class="form-control item">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">นามสกุล</label>
                        <input name="lname" type="text" class="form-control item">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">เบอร์โทรศัพท์</label>
                        <input name="phone" type="text" class="form-control item">
                    </div>
                    <div class="form-group">
                        <label class="col-sm-5 control-label">URL Facebook</label>
                        <input name="profile" type="text" class="form-control item">
                    </div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-success"  type="submit" name="submit" value="เพิ่มข้อมูล">
                <button type="button" class="btn btn-primary" data-dismiss="modal">ปิด</button>
            </div>
            </form>
        </div>
    </div>
</div>