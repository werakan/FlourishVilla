<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>หน้าแรก</title>

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/datepicker3.css" rel="stylesheet">
<link href="css/styles.css" rel="stylesheet">

<!--Icons-->
<script src="js/lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<?php 
include 'connect.php';
$userid = $_SESSION['id'];

$strSQL = "SELECT * FROM customer ct
			INNER JOIN rent rt ON
			ct.cus_id = rt.cus_id
			INNER JOIN room rm ON
			rt.room_id = rm.room_id WHERE ct.cus_id=$userid ";

$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


$query2 = mysql_fetch_array($objQuery);

?>







<body>


	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index_user.php"><span></span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index_user.php"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
  <ul class="nav menu">
	  <li><a href="index_user.php"><svg class="glyph stroked dashboard-dial"></svg>ข้อมูลส่วนตัว</a></li>
      
		<li><a href="check_user.php"><svg class="glyph stroked calendar"></svg>เช็คค่าบริการ</a></li>
        
            
		<!-- <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li> -->
			
	</ul>

  </div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			  <h1 class="page-header"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ข้อมูลส่วนตัว</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget "> </div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3"></div>
			<div class="col-xs-12 col-md-6 col-lg-3">
			  <div class="panel panel-teal panel-widget"> </div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
                
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="/////////////////////////////รูป/////////"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
      <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					<div class="panel-body">
                    
						<div class="canvas-wrapper">
                        <div>
                          <p><strong>ชื่่อ นามสกุล <? echo $query2["cus_fname"]." ".$query2["cus_lname"]; ?> </strong></p>
                          <p>&nbsp;</p>
                          
                          <p>&nbsp;เพศ 
                     	<? if($query2["cus_gender"] == "m"){
							echo "ชาย";
						} else if($query2["cus_gender"] == "f"){
							echo "หญิง";
						}
						?>
                        
                        </p>
                          <br>
                          <p><br>
                          </p>
                          <p> เลขบัตรประชาชน <? echo $query2["cus_citizen"]; ?> </p>
                          <p>&nbsp;</p>
                          <p>เข้าอยู่เมื่อ <? echo $query2["cus_date"];?></p>
                          <p>&nbsp;</p>
                          <p>ห้องพัก <? echo $query2 ["room_name"]; ?> </p>
                        </div>
                        
                        
						  <canvas class="" id="" height="200" width="600">/canvas>
						
                        </div>
                    
					</div>
				</div>
			</div>
		</div><!--/.row-->
        
        
		<div class="row"> </div><!--/.row-->
		<!--/.row-->		<!--/.row-->
	</div>	<!--/.main-->

	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
