<!DOCTYPE HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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

  <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
    Report
    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
  </a>
  <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#mySidenav">
    <nav class="sb-sidenav-menu-nested nav">
      <a class="nav-link" href="#">List of users</a>
      <a class="nav-link" href="#">List of area</a>
      <a class="nav-link"href="#">List of Teachers Designation</a>
      <a class="nav-link"href="#">List of Lesson according to category</a>
      <a class="nav-link"href="#">List of class w/Teacher</a>
    </nav>
  </div>
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

	

			<!-- Table -->
			<div class="table-container" style="text-align: center;">
	<div class="search-bar">
		<input type="text" id="search-input" placeholder="Search">
		<i class="fa fa-search search-icon"></i>
	</div>
	<table id="my-table"><br><br>
					<thead>
						<tr>
							<th>ID</th>
							<th>Lesson title</th>
							<th>Description</th>
							<th>File</th>
							
							<th>Action</th>
						</tr>
					</thead>
				
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
