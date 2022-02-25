<?php
include('connect.php');
?>

<!-- //* เช็คว่ามี user_admin เข้ามาไหมถ้ามีให้โชวว่าล็อกอินสำเร็จ -->
<?php if (isset($_SESSION['user_admin'])) {  ?>
	<script>
		window.onload = function logined() {
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				width: 350,
				padding: 20,
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})
			Toast.fire({
				icon: 'success',
				title: 'เข้าสู่ระบบสำเร็จ!'
			})
		}
	</script>

<?php unset($_SESSION['user_admin']);
} ?>

<!-- //* เช็คว่ามีการกดลบไหม ถ้ามีให้โชวว่าลบสำเร็จเเล้ว -->

<?php if (isset($_SESSION['deldata'])) {  ?>
	<script>
		window.onload = function deldata() {
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				width: 350,
				padding: 20,
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})
			Toast.fire({
				icon: 'success',
				title: 'ลบข้อมูลสำเร็จ!'
			})
		}
	</script>
<?php unset($_SESSION['deldata']);
} ?>

<!-- //* เช็คว่ามีการส่งค่าเพิ่มข้อมูลสำเร็จไหม ถ้ามีให้โชวว่าเพิ่มสำเร็จสำเร็จเเล้ว -->

<?php if (isset($_SESSION['successuser'])) {  ?>
	<script>
		window.onload = function successdata() {
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				width: 350,
				padding: 20,
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})
			Toast.fire({
				icon: 'success',
				title: 'เพิ่มข้อมูลสำเร็จ!'
			})
		}
	</script>
<?php unset($_SESSION['successuser']);
} ?>

<!-- //* เช็คว่ามีการส่งค่าซ้ำมาไหม -->

<?php if (isset($_SESSION['userDuplicate'])) {  ?>
	<script>
		window.onload = function userDuplicate() {
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				width: 400,
				padding: 20,
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})
			Toast.fire({
				icon: 'warning',
				title: 'ข้อมูลซ้ำ กรุณากรอกข้อมูลให้ถูกต้อง!'
			})
		}
	</script>
<?php unset($_SESSION['userDuplicate']);
} ?>

<!-- //* เช็คว่ามีการบันทึกมาไหม -->

<?php if (isset($_SESSION['edituser'])) {  ?>
	<script>
		window.onload = function userDuplicate() {
			const Toast = Swal.mixin({
				toast: true,
				position: 'top-end',
				width: 350,
				padding: 20,
				showConfirmButton: false,
				timer: 3000,
				timerProgressBar: true,
				didOpen: (toast) => {
					toast.addEventListener('mouseenter', Swal.stopTimer)
					toast.addEventListener('mouseleave', Swal.resumeTimer)
				}
			})
			Toast.fire({
				icon: 'success',
				title: 'บันทึกข้อมูลสำเร็จ!'
			})
		}
	</script>
<?php unset($_SESSION['edituser']);
} ?>


<?php if (isset($_SESSION['edituser']) || isset($_SESSION['userDuplicate']) || isset($_SESSION['successuser']) || isset($_SESSION['deldata'])) {
	unset($_SESSION['userDuplicate']);
	unset($_SESSION['successuser']);
	unset($_SESSION['deldata']);
	unset($_SESSION['edituser']);
} ?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>SATSAWAT TEKWONG</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Itim&family=Prompt:wght@600&display=swap" rel="stylesheet">
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="sweetalert2.all.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.2.1/dist/sweetalert2.all.min.js"></script>



</head>

<body>
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table id="example">
						<thead>
							<tr class="table100-head">
								<th class="column1">รหัสผู้ใช้งาน</th>
								<th class="column2">ชื่อผู้ใช้</th>
								<th class="column3">ชื่อ-นามสกุล</th>
								<th class="column4">หมายเลขโทรศัพท์</th>
								<th class="column4">Operation</th>
							</tr>
						</thead>
						<?php while ($row = mysqli_fetch_array($results)) { ?>
							<tbody>
								<tr>
									<td class="column1"><?php echo $row["id"]; ?></td>
									<td class="column2"><?php echo $row["username"]; ?></td>
									<td class="column3"><?php echo $row["fname"] . "&nbsp;&nbsp;&nbsp;" . $row["lname"]; ?></td>
									<td class="column4"><?php echo $row["phone"]; ?></td>
									<td style="width: 20%;">
										<a data-toggle="tooltip" data-placement="bottom" title="View Profile!" href="<?php echo $row["urlfacebook"]; ?>" target="_blank" title="Profile" class="table-link">
											<span class="fa-stack">
												<i class="fa fa-square fa-stack-2x"></i>
												<i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
											</span>
										</a>
										<a href="" title="Edit" data-toggle="modal" class="edit_data table-link" id="<?php echo $row['id']; ?>">
											<span class="fa-stack">
												<i class="fa fa-square fa-stack-2x"></i>
												<i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
											</span>
										</a>
										<button data-toggle="tooltip" data-placement="bottom" title="Delete!" class="delete_data table-link-danger" id="<?php echo $row['id']; ?>">
											<span class="fa-stack">
												<i class="fa fa-square fa-stack-2x"></i>
												<i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
											</span>
										</button>
									</td>
								</tr>
							</tbody>
						<?php
						}
						?>
					</table>
				</div>
				<div class="botton-insert">
					<!-- Trigger the modal with a button -->
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal-insert">เพิ่มข้อมูล</button>
				</div>
				<div class="container">
					<div class="center">
						<form action="logout.php" method="post">
							<button type="submit" name="logout" class="btn_logout">
								<svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
									<polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
									<polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
								</svg>
								<span>LOGOUT</span>
							</button>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>



	<?php require 'insert_modal.php'; ?>
	<?php require 'editmodal.php'; ?>

	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- <script src="http://code.jquery.com/jquery.js"></script> -->
	<script src="main.js"></script>

	<!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> -->



	<script>
		$(document).ready(function() {
			$('.edit_data').click(function() {
				var uid = $(this).attr("id");
				$.ajax({
					url: "fetch.php",
					method: "post",
					data: {
						id: uid
					},
					dataType: "json",
					success: function(data) {
						$('#idz').val(data.id);
						$('#username').val(data.username);
						$('#password').val(data.password);
						$('#fname').val(data.fname);
						$('#lname').val(data.lname);
						$('#phone').val(data.phone);
						$('#urlfacebook').val(data.urlfacebook);
						$("#update").val("update");
						$("#EditModal").modal('show');
					}
				});
			});
			$('#insert-form').on('submit', function(e) {
				e.preventDefault();
				$.ajax({
					url: "insert.php",
					method: "post",
					data: $('#insert-form').serialize(),
					beforeSend: function() {
						$("#insert").val("Insert..");
					},
					success: function(data) {
						$('#insert-form')[0].reset();
						$('#myModal-insert').modal('hide');
						location.reload();
					}
				});
			});
			$('.delete_data').click(function() {
				var uid = $(this).attr("id");
				var status = Swal.fire({
					title: 'แน่ใจแล้วใช่ไหม?',
					text: "หากคุณลบข้อมูลนี้ไปแล้วจะไม่สามารถกู้คืนได้อีก!",
					icon: 'warning',
					showCancelButton: true,
					confirmButtonColor: '#3085d6',
					cancelButtonColor: '#d33',
					confirmButtonText: 'ใช่ ลบเลย!',
					cancelButtonText: 'ไม่ ยังก่อน!'
				}).then((result) => {
					if (result.isConfirmed) {
						$.ajax({
							url: "delete.php",
							method: "post",
							data: {
								id: uid
							},
							success: function(data) {
								location.reload();
							}
						});
					}
				})
			});
		});
	</script>

	<script>
		$(document).ready(function() {
			$('[data-toggle="tooltip"]').tooltip();
		});
	</script>



</body>

</html>