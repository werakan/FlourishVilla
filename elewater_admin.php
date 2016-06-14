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


<?php
		 
include "connect.php";


$strSQL = "SELECT * FROM room
INNER JOIN rent 
ON room.room_id = rent.room_id " ;



;
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


?>

</head>



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
				<a class="navbar-brand" href="index_user.html"><span></span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="index_user.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							
							<li><a href="#"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div><!-- /.container-fluid -->
	</nav>
		
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li><a href="index_admin.php"><svg class="glyph stroked dashboard-dial"></svg>เพิ่มข้อมูลผู้ใช้งาน</a></li>
      
			<li><a href="elewater_admin.php"><svg class="glyph stroked calendar"></svg>เพิ่มค่าน้ำค่าไฟ</a></li>
            <li><a href="agree_user.html"><svg class="glyph stroked calendar"></svg>ดูข้อมูลห้อง/a></li>
            <li><a href="agree_user.html"><svg class="glyph stroked calendar"></svg>ดูข้อมูลห้อง/a></li>
			<!-- <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li> -->
							<a href="#">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use></svg></span> Dropdown 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
			<li role="presentation" class="divider"></li>
			<li><a href="login.html"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Login Page</a></li>
		</ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="index_admin.php"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">ค่าน้ำ-ค่าไฟ</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			  <h1 class="page-header"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ค่าน้ำ-ค่าไฟ</h1>
			</div>
		</div><!--/.row-->
		
<div class="row"></div>
		<p>
      <!--/.row-->
		
      <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					
					<div class="panel-body">
                    
						<div class="canvas-wrapper">
                        <div>
                         
                            <?

$message = $_GET['message'];
if($message == "OK"){
	
	echo "การเพิ่มข้อมูลสำเร็จแล้ว";
}


?>
<form action="insert_elewater.php" method="post">
</p>
<p>ค่าน้ำ  : 
 &nbsp;&nbsp;&nbsp; 
 <input type="text" name="billwater">
 &nbsp;&nbsp;หน่วย<br>
  <br>
</p>
<p>
		  ค่าไฟ  :  &nbsp;&nbsp;&nbsp;
  <input type="text" name="billele">
  &nbsp;&nbsp;หน่วย</p>
		<p><br>
		  <br>         
         
 เลือกห้อง :  <select name= "rentid"  style="width: 150px">
    
  <?php

while($objResult = mysql_fetch_array($objQuery)){
	
$roomid = $objResult["room_id"];
	


	
$result = mysql_query($strSQL);

$obresultroomid = mysql_fetch_array($result);
	
$rentid = $obresultroomid["rent_id"];
	
	
	
?>



  <option value="<?php echo $objResult['rent_id']; ?>"> <?php echo $objResult["room_name"];?></option>
      <?   } ?>
</select >
         
   
         
         
         
		  <br><br>
		  
	
		  <input type="submit" value"submit">
         </p></form> 
</p>
</div>
		  
		  
		  <canvas class="" id="" height="200" width="600">/canvas>
		  
		  </div>
		  
		  </div>
		  </div>
		  </div>
		  </div><!--/.row-->
		  
		  
</p>
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
