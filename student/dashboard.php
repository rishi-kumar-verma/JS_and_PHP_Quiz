<?php include("includes/header.php");
	include("includes/sidebar.php"); 
	$id=$_SESSION['idhotel'];
	
	
	?>

<div class="content-main"><div class="container-fluid"><div class="row"><div class="col-sm-12 col-md-12">
<h3>Dashboard</h3><hr /><p>Hello <b><?php echo $id;?></b>, Welcome to <b>CBQS </b> portal.</p><hr /><div class="row">
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="header-panel-dashboard color-3"><div class="pannel-box"><a href="#"><h2>Exams</h2></a>
<div class="info-holder">
<a class="info-ico" data-placement="left" data-toggle="tooltip" data-original-title="This is the area where you can manage the Exams." href="#">
<i class="fa fa-info-circle"></i></a></div></div><ul class="panel-box-Menu"><li><a href="exam.php">Exams List</a></li>
</ul></div></div>

<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12"><div class="header-panel-dashboard color-4"><div class="pannel-box">
<a href="#"><h2>Results</h2></a><div class="info-holder">
<a class="info-ico" data-placement="left" data-toggle="tooltip" data-original-title="This is the area where you can manage the Homeworks." href="#">
<i class="fa fa-info-circle"></i></a></div></div><ul class="panel-box-Menu"><li><a href="result.php">Exam Result</a></li><ul></div></div>


</div></div></div></div></div></div>
<?php include("includes/footer.php"); ?>
</div>

</body>
</html>