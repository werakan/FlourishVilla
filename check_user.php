<!DOCTYPE html>

<? session_start(); 

$session_id = $_SESSION['id'];
$session_name = $_SESSION['name'];

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
				<a class="navbar-brand" href="index_user.php"><span></span>Admin</a>
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
  <ul class="nav menu">
	  <li><a href="index_user.php"><svg class="glyph stroked dashboard-dial"></svg>ข้อมูลส่วนตัว</a></li>
      
		<li><a href="check_user.php"><svg class="glyph stroked calendar"></svg>เช็คค่าบริการ</a></li>
        
            
		<!-- <li><a href="charts.html"><svg class="glyph stroked line-graph"><use xlink:href="#stroked-line-graph"></use></svg></a></li> -->
			
	</ul>

  </div>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">		
		<div class="row">
			
		</div><!--/.row-->
		
  
		<div class="row">
			<div class="col-lg-12">
			  <h1 class="page-header"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; เช็คค่าชำระบริการ</h1>
			</div>
		</div><!--/.row-->
									
		<!--/.row-->
		
		<div class="row">

			<!--/.col-->
	<?php  
			
include 'connect.php'; 
$userid = $_SESSION['id'];

$strSQL = "SELECT * FROM customer ct
			INNER JOIN rent rt ON
			ct.cus_id = rt.cus_id
			INNER JOIN room rm ON
			rt.room_id = rm.room_id WHERE ct.cus_id=$userid ";

$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");

	
$customerObj = mysql_fetch_array($result);
?>
  
  
  <div <p> คุณ <?php echo $customerObj['cus_fname']."  ".$customerObj['cus_lname'];  ?>
  <br><br>
  

    <table border="1">
        <tr>
        	<td> ค่าไฟ</td>
            <td> ค่าน้ำ</td>
            <td> วันที่ออกบิล</td>
            <td> ชำระภายในวันที่</td>
        </tr>

            	<tr>
                	<td> <?php  echo $billObj['bill_ele']?></td>
                    <td> <?php  echo $billObj['bill_water']?></td>
                    <td> <?php  echo $billObj['bill_date']; ?></td>
                    <td> <?php  echo $billObj['bill_exp']; ?></td>
                   
            	</tr>
            <?php
		?>  </table>
		


            
            
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
