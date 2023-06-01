<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
	<style>
	    .bs-example {
	    	margin: 20px;
	    }

	    .launch-btn {
	    	position: absolute;
	    	top: 130px;
	    	right: 20px;
	    }
		body{
			background-color: #1b203d;
		}
	</style>
</head>

<body>
	<div id="mySidenav" class="sidenav">
		<p class="logo"><span>T'Boli</span></p>
		<a href="admin.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
		<a href="admin_student.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Students</a>
		<a href="admin_teachers.php" class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Teachers</a>
		<a href="#" class="icon-a"><i class="fa fa-upload icons"></i> &nbsp;&nbsp;Upload Lesson/Content</a>
		<a href="admin_progress.php" class="icon-a"><i class="fa fa-hourglass icons"></i> &nbsp;&nbsp;Progress</a>
		<a href="#" class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Category</a>
		<a href="#" class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Class/Batch</a>
		<a href="#" class="icon-a"><i class="fa fa-warning icons"></i> &nbsp;&nbsp;Report</a>
	</div>

	<div id="main">
		<div class="head">
			<div class="col-div-6">
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav">&#9776; Dashboard</span>
				<span style="font-size:30px;cursor:pointer; color: white;" class="nav2">&#9776; Dashboard</span>
			</div>
			<div class="col-div-6">
				<div class="profile">
					<img src="images/elmer.png" class="pro-img" />
					<p>Elmer Burdo <span>UI / UX DESIGNER</span></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<div class="bs-example">
			<!-- Button HTML (to Trigger Modal) -->
			<a href="#myModal" role="button" class="btn btn-lg btn-primary launch-btn" data-bs-toggle="modal">Add Students</a>

			<!-- Modal HTML -->
			<div id="myModal" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title">Add Student</h5>
							<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">First Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Last Name</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Age</label>
										<input type="number" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Grade/Section</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Street</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">City</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Barangay</label>
										<input type="text" class="form-control">
									</div>
								</div>
								<div class="col-6">
									<div class="mb-3">
										<label class="form-label">Zip Code</label>
										<input type="text" class="form-control">
									</div>
								</div>
							</div>
						
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Add Student</button>
						</div>
					</div>
				</div>
			</div>

			<!-- Table -->
			<div class="table-container">
				<input type="text" id="search-input" placeholder="Search">
				<table id="my-table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Full Name</th>
							<th>Age</th>
							<th>Section/Grade</th>
							<th>Address</th>
							<th>Status</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>1</td>
							<td>Elmer Luspo</td>
							<td>6</td>
							<td>Grade 1</td>
							<td>Maasim</td>
							<td><span class="status active">Active</span></td>
							<td>
								<!-- <button class="action activate">Activate</button> -->
								<button class="action deactivate">Archive</button>
								<!-- <button class="action archive">Archive</button> -->
								<button class="action view">View</button>
							</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Neil Varquez</td>
							<td>12</td>
							<td>Grade 6</td>
							<td>Sarangani</td>
							<td><span class="status active">Active</span></td>
							<td>
								<!-- <button class="action activate">Activate</button> -->
								<button class="action deactivate">Archive</button>
								<!-- <button class="action archive">Archive</button> -->
								<button class="action view">View</button>
							</td>
						</tr>
						<tr>
							<td>3</td>
							<td>Ryan Laroco</td>
							<td>5</td>
							<td>Kinder</td>
							<td>T'Boli</td>
							<td><span class="status active">Active</span></td>
							<td>
								<!-- <button class="action activate">Activate</button> -->
								<button class="action deactivate">Archive</button>
								<!-- <button class="action archive">Archive</button> -->
								<button class="action view">View</button>
							</td>
						</tr>
						<tr>
							<td>4</td>
							<td>JD Enhog</td>
							<td>11</td>
							<td>Grade 4</td>
							<td>Korea</td>
							<td><span class="status active">Active</span></td>
							<td>
								<!-- <button class="action activate">Activate</button> -->
								<button class="action deactivate">Archive</button>
								<!-- <button class="action archive">Archive</button> -->
								<button class="action view">View</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script>
			$(".nav").click(function(){
				$("#mySidenav").css('width','70px');
				$("#main").css('margin-left','70px');
				$(".logo").css('visibility', 'hidden');
				$(".logo span").css('visibility', 'visible');
				$(".logo span").css('margin-left', '-10px');
				$(".icon-a").css('visibility', 'hidden');
				$(".icons").css('visibility', 'visible');
				$(".icons").css('margin-left', '-8px');
					$(".nav").css('display','none');
				$(".nav2").css('display','block');
			});

			$(".nav2").click(function(){
				$("#mySidenav").css('width','300px');
				$("#main").css('margin-left','300px');
				$(".logo").css('visibility', 'visible');
				$(".icon-a").css('visibility', 'visible');
				$(".icons").css('visibility', 'visible');
				$(".nav").css('display','block');
				$(".nav2").css('display','none');
			});

			// Search functionality
			$("#search-input").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#my-table tbody tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});

			// Activate button
			$(".activate").click(function(e) {
				e.preventDefault();
				$(this).closest("tr").find(".status").removeClass("inactive").addClass("active").text("Active");
			});

			// Deactivate button
			$(".deactivate").click(function(e) {
				e.preventDefault();
				$(this).closest("tr").find(".status").removeClass("active").addClass("inactive").text("Inactive");
			});

			// Archive button
			$(".archive").click(function(e) {
				e.preventDefault();
				$(this).closest("tr").find(".status").removeClass("active").addClass("inactive").text("Inactive");
			});

			// View button
			$(".view").click(function(e) {
				e.preventDefault();
				// Add your view logic here
			});

			// Add Student button click event
			$("#add-student").click(function(e) {
				e.preventDefault();
				// Add your logic to handle the click event of the "Add Student" button
			});
		</script>
	</body>
</html>
