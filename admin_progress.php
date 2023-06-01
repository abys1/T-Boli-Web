<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.progress-bar {
			width: 100%;
			height: 20px;
			background-color: #f1f1f1;
			border-radius: 10px;
			overflow: hidden;
		}

		.progress {
			height: 100%;
			background-color: #4CAF50;
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
					<p>Manoj Adhikari <span>UI / UX DESIGNER</span></p>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>

		<!-- Table -->
		<div class="table-container">
			<input type="text" id="search-input" placeholder="Search">
			<table id="my-table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Full Name</th>
						<th>Practices</th>
						<th>Letter</th>
						<th>Number</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>1</td>
						<td>Elmer Luspo</td>
						<td><div class="progress-bar"><div class="progress" style="width: 50%"></div></div></td>
						<td><div class="progress-bar"><div class="progress" style="width: 80%"></div></div></td>
						<td><div class="progress-bar"><div class="progress" style="width: 70%"></div></div></td>
						<td>
							<button class="action view">View</button>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>JD Luspo</td>
						<td><div class="progress-bar"><div class="progress" style="width: 10%"></div></div></td>
						<td><div class="progress-bar"><div class="progress" style="width: 30%"></div></div></td>
						<td><div class="progress-bar"><div class="progress" style="width: 40%"></div></div></td>
						<td>
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

		// View button
		$(".view").click(function(e) {
			e.preventDefault();
			// Add your view logic here
		});
	</script>
</body>
</html>
