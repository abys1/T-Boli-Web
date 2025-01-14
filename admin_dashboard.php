<!Doctype HTML>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>


<body>
	
	<div id="mySidenav" class="sidenav">
	<p class="logo"><span>T'Boli</p>
  <a href="admin_dashboard.php" class="icon-a"><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a>
  <a href="admin_adminaccount.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Admin</a>
  <a href="admin_student.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Students</a>
  <a href="admin_teachers.php"class="icon-a"><i class="fa fa-users icons"></i> &nbsp;&nbsp;Teachers</a>
  <a href="#"class="icon-a"><i class="fa fa-upload icons"></i> &nbsp;&nbsp;Upload Lesson/Content</a>
  <a href="admin_progress.php"class="icon-a"><i class="fa fa-hourglass icons"></i> &nbsp;&nbsp;Progress</a>
  <a href="#"class="icon-a"><i class="fa fa-user icons"></i> &nbsp;&nbsp;Category</a>
  <a href="#"class="icon-a"><i class="fa fa-list-alt icons"></i> &nbsp;&nbsp;Class/Batch</a>
  <a href="#"class="icon-a"><i class="fa fa-warning icons"></i> &nbsp;&nbsp;Report</a>
 

</div>
<div id="main">

	<div class="head">
		<div class="col-div-6">
<span style="font-size:30px;cursor:pointer; color: white;" class="nav"  >&#9776; Dashboard</span>
<span style="font-size:30px;cursor:pointer; color: white;" class="nav2"  >&#9776; Dashboard</span>
</div>
	
	<div class="col-div-6">
	<div class="profile">

		<img src="images/elmer.png" class="pro-img" />
		<p>Manoj Adhikari <span>UI / UX DESIGNER</span></p>
	</div>
</div>
	<div class="clearfix"></div>
</div>

	<div class="clearfix"></div>
	<br/>

  
	
	<div class="col-div-3">
		<div class="box">
			<p>67<br/><span>Students</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>88<br/><span>Teachers</span></p>
			<i class="fa fa-users box-icon"></i>
		</div>
	</div>
	<div class="col-div-3">
		<div class="box">
			<p>99<br/><span>Area</span></p>
			<i class="fa fa-shopping-bag box-icon"></i>
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

</script>

</body>


</html>
