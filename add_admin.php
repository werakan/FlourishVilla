<!DOCTYPE html>
<?php
session_start();
include('connect.php');

$session_id = $_SESSION['id'];
$session_name = $_SESSION['name'];
if ($session_id !=null){
	
	?>
    
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> 
					  <?
                        echo $_SESSION["username"]; ?> <span class="caret"></span></a>
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
	  <ul class="nav menu">
     		 <li><a href="manageroom_admin.php"><svg class="glyph stroked calendar"></svg>จัดการห้องพัก</a></li>
	    <li><a href="elewater_admin.php"><svg class="glyph stroked calendar"></svg>เพิ่มค่าน้ำค่าไฟ</a></li>
            
            
			<!-- <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li> -->
						<li class="parent ">
				<a href="http://www.allprojectz.com/max/add_admin.php">
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
			
	  </ul>

	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
        
        <!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
			  <h1 class="page-header"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;เพิ่มข้อมูลผู้เช่า</h1>
			</div>
		</div><!--/.row-->
		
<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget "> </div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget"> </div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget"> </div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3"></div>
	  </div>
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
<form action="insert.php" method="post">
</p>
<p><br>

<div class="form-group">
<label>Username </label>
<br>
<input class="form-control" name="username">
</div>
		<br>
  	   Password   :
  			<input type="text"  class="form-control" name="password">
			<br>
	  ชื่อผู้ใช้งาน  
    
 		 <input type="text"  class="form-control"  name="firstname">
         <br>
         
       นามสกุล  :
        
          <br>
		<input type="text" class="form-control" name="lastname">
        
        <br>
		
          address : 
  <input type="text" class="form-control" name="address"><br>
		  citizen : &nbsp;&nbsp;
  <input type="text"  class="form-control" name="citizen">
  <br><br>
  gender :
  <input type="radio" name="gender" value="male" checked>
Male
<input type="radio" name="gender" value="female">
Female</p>
		<p><br>
		  email : 
		    <input type="text"  class="form-control"  name="email"><br><br>
      agree :
     <input type="text"  class="form-control"  name="agree"><br><br>
		 <br>
         
		  <br><br>
		
        
       <div> <h2> การจองห้องพัก </h2></div>
       <br>
       Room Number : <select class="form-control"  name="roomNumber">
       <?php 
	   $sqlstr = "SELECT room.room_id,room.room_name from room  LEFT JOIN rent On room.room_id = rent.room_id WHERE rent.rent_status IS NULL"; 
	   $result = mysql_query($sqlstr);
	   
	   if($result!=null){
		   if(mysql_num_rows($result)>0){
			   for($i=0;$i<mysql_num_rows($result);$i++){
					$roomObj = mysql_fetch_array($result);
					
					?>                        	
						<option value="<?php echo $roomObj['room_id'];?>"><?php echo $roomObj['room_name']; ?> </option>
					<?php
			   }
		   }
	   }
	   
	   ?>
       
       <br>
       
       </select>
       Rent Type : <select class="form-control" name="rentType">
       <option value="R">จอง</option>
       <option value="S">เข้าพักทันที</option>
       
       </select>
       <br>
    
		  
		  
		  <input type="submit" class="btn btn-primary" value"submit">
		  </p> </form>
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

	<?
	
	
	}else{
		
		header("Location: ../max/login.php");
		
		
		}
		


?>
