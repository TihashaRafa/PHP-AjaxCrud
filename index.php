


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/fonts/font_awesome/css/all.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	<div class="wrap-table ">
		<div class="mess"></div>

	<a data-toggle="modal" class="btn btn-sm btn-primary" href="#staff-modal">Add new staff</a>
	<br>
	<br>

		<div class="card shadow">
			<div class="card-body">
				<h2>All Staff</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>cell</th>
							<th>photo</th>
							<th>action</th>

						</tr>
					</thead>
					<tbody id= "staff_all">
						

					</tbody>
				</table>
			</div>
		</div>
	</div>

<!-- Staff Add model -->
<div id ="staff-modal" class="modal fade">
	<div class ="modal-dialog modal-dialog-centered">
		<div class ="modal-content">
			<div class ="modal-header"></div>
			<h4 class=" modal-title">Add new staff</h4>
			<button class="close" data-dismiss="modal">&times;</button>
			<div class ="modal-body">
			
				<div class="modal-msg"></div>
				<form id="staff-form" action="" method ="POST" entype ="multipart/form-data">
					<div class="from-group">
						<label for="">Name</label>
						<input name = "name" class="form-control" type="text">
					</div>

					<div class="from-group">
						<label for="">email</label>
						<input name="email" class="form-control" type="text">
					</div>

					<div class="from-group">
						<label for="">cell</label>
						<input name="cell" class="form-control" type="text">
					</div>

					<div class="from-group">
					<img id="staff_photo_load" src="" alt="">
						<input name="photo" style="display: none;"class="form-control" type="file" id="staff_photo">
						<label for="staff_photo"><img id= "image_loder" style="width: 100px; cursor : pointer;" src="assets/media/img/pp_photo/c.jpg" alt=""></label>
						<a id="remove_photo" href="#">Remove Photo</a>
					</div>

					<div class="from-group">
						<input class="btn btn-primary" value="add" type="submit">
					</div>
				</form>
			</div>
			<div class ="modal-footer"></div>
		</div>
	
	</div>

</div>

<!-- staff show model -->

<div id="staff_view" class ="modal fade">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-body">
				<button class="close" data-dismiss="modal">&times;</button>
				<div class="staff-single-data">
				<img src="photos/staff/00ba5d778897f0dbba374b4bfc99cc68195780678_937912766993306_4343178162459922961_n.jpg" alt="">
				<h2>Tihasha Rafa</h2>
				<h4>01775956395</h4>

				<table class="table table-striped">
					<tr>
						<td>name</td>
						<td id =" name">name</td>
					</tr>
					<tr>
						<td>email</td>
						<td id ="email">name</td>
					</tr>
					<tr>
						<td>cell</td>
						<td id ="cell">name</td>
					</tr>
					
				</table>
				</div>
			</div>
		</div>
	</div>	
</div>





<!-- Staff update model -->
<div id ="staff-modal_update" class="modal fade">
	<div class ="modal-dialog modal-dialog-centered">
		<div class ="modal-content">
			<div class ="modal-header"></div>
			<h4 class=" modal-title">Update staff</h4>
			<button class="close" data-dismiss="modal">&times;</button>
			<div class ="modal-body">
			
				<div class="modal-msg"></div>
				<form id="staff-update-form" action="" method ="POST" entype ="multipart/form-data">
					<div class="from-group">
						<label for="">Name</label>
						<input name = "name" class="form-control" type="text">
						<input name = "id" class="form-control" type="hidden">
					</div>

					<div class="from-group">
						<label for="">email</label>
						<input id ="email_validate" name="email" class="form-control" type="text">
					</div>

					<div class="from-group">
						<label for="">cell</label>
						<input name="cell" class="form-control" type="text">
						<span id= "email_check"></span>
					</div>

					<div class="from-group">
					<img id="staff_photo_load" src="" alt="">
						<input name="old_photo" style="display: none;"class="form-control" type="hidden">
						<input name="new_photo" style="display: none;" type="file" id="staff_photo_update">
						<label for="staff_photo_update"><img id= "image_loder" style="width: 100px; cursor : pointer;" src="assets/media/img/pp_photo/c.jpg" alt=""></label>
						<a id="remove_photo" href="#">Remove Photo</a>
					</div>

					<div class="from-group">
						<input class="btn btn-primary" value="update" type="submit">
					</div>
				</form>
			</div>
			<div class ="modal-footer"></div>
		</div>
	
	</div>

</div>
	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
	<script>

	</script>
</body>
</html>