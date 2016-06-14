<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Lumino - Widgets</title>

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
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
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
				<li><a href="index_user.html"><svg class="glyph stroked dashboard-dial"></svg>ข้อมูลส่วนตัว</a></li>
      
			<li><a href="check_user.html"><svg class="glyph stroked calendar"></svg>เช็คค่าบริการ</a></li>
            <li><a href="agree_user.html"><svg class="glyph stroked calendar"></svg>ใบสัญญา</a></li>
			
			<li class="parent ">
				<a href="http://www.allprojectz.com/max/manage_admin.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"><use xlink:href="#stroked-chevron-down"></use>
					</svg></span> จัดการข้อมูลผู้เช่า 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="http://www.allprojectz.com/max/edit_admin.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="stroked-chevron-right"></use></svg> แก้ไขข้อมูผู้เช่า
						</a>
					</li>
					<li>
						<a class="" href="http://www.allprojectz.com/max/add_admin.php">
							<svg class="glyph stroked chevron-right"><use xlink:href="#stroked-chevron-right"></use></svg> เพิ่มข้อมูลผู้เช่า
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
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Icons</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			  <h1 class="page-header"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; จัดการข้อมูลห้องพัก</h1>
			</div>
		</div><!--/.row-->
									
		<!--/.row-->
		
		<div class="row">
			<!--/.col-->
			

           <?php
		 
include "connect.php";

$strSQL = "SELECT * FROM room";
$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");


?>



<table width="1139" height="60" border="1">
  <tr>
    <th width="63"> <div align="center">เลขห้อง </div></th>
    <th width="125"> <div align="center">สถานนะ </div></th>
    <th width="125"> <div align="center">ประเภทห้อง </div></th>
    
    
    <th width="92"> <div align="center">บันทึก</div></th>
    
  	
    
  </tr>
<?php

while($objResult = mysql_fetch_array($objQuery))
{
?>
<form action="saveroom.php?room_id=<?php echo $objResult["room_id"];?>" name="frmEdit" method="post">
  <tr>
 
  
    <td><div align="center"><?php echo $objResult["room_id"];?></div></td>

    <? echo $room_id; ?>

    <td align="center"><select name= "status"  style="width: 150px"> 
    
    <>
    
    <? if($objResult["room_status"] == "1"){
			$status_title = "ว่าง";
		}elseif($objResult["room_status"] == "2"){
			$status_title = "ไม่ว่าง";
		}elseif($objResult["room_status"] == "3"){
			$status_title = "จอง";
	
		}?>
  <option value="0"> <?php echo $status_title; ?> </option>
  <option value="1">ว่าง</option>
  <option value="2">ไม่ว่าง</option>
  <option value="3">จอง</option>
  
</select ></td>

 <? if($objResult["room_type"] == "1"){
			$room_title = "Class A";
		}elseif($objResult["room_type"] == "2"){
			$room_title = "Class B";
		}elseif($objResult["room_type"] == "3"){
			$room_title = "Class C";
		}elseif($objResult["room_type"] == "4"){
			$room_title = "Daily";
		}?>


    <td><select name="classroom">
    
  <option value="0"><?php echo $room_title; ?></option>
  <option value="1">Class A</option>
  <option value="2">Class B</option>
  <option value="3">Class C</option>
  <option value="4">daily</option>
  
  
</select></td>
    
    
    
    <td > <input type="submit" class="btn" name="submit" value="submit"></td>
  </tr>
  
  </form>
<?php
}
?>
</table>
    
      
			<!--/.col-->
		</div><!--/.row-->
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
