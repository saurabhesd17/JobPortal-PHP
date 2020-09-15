<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>
<?php 

/*if (isset($_POST['login'])) 
{
	$Username=mysql_real_escape_string($_POST["Uname"]);
	$Password=mysql_real_escape_string($_POST["pass"]);

	if (empty($Username) || empty($Password)) 
	{
		$_SESSION['ErrorMessage']="All fields must be field out";
		Redirect_to("Admin.php");
	}
	else
	{
		$Found_Account=Admin_Login_attempt($Username,$Password);
		$_SESSION["User_Id"]=$Found_Account["id"];
		$_SESSION["User-name"]=$Found_Account["db_name"];
		
	}
}*/

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Admin Panel</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome-->
</head>  
<body>
<nav class="navbar navbar-default" role="navigation">
	<div class="container">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	        <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=""/></a>
	    </div>
	    <!--/.navbar-header-->
	    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	        <ul class="nav navbar-nav">
		       		        
		       
		        <li><a href="add_new_job.php">Add New Job</a></li>
		        <li><a href="resume.php">Logout</a></li>

		         
	        </ul>
	    </div>
	    <div class="clearfix"> </div>
	  </div>
	    <!--/.navbar-collapse-->
	</nav>








<div class="banner_1">
	 
</div>	
<div class="container">
    <div class="single">  
	   
<div class="table table-responsive">	   	  
	 <table class="table table-striped table-hover">
	 	<tr>
	 		<th>Sr.No.</th>
	 		<th>Banner</th>
	 		<th>Name</th>
	 		<th>Date</th>
	 		
	 		
	 		<th>Description</th>
	 		<th>Job Details</th>
	 		<th>Company Details</th>
	 		<th>Actions</th>
	 		<th>Preview</th>
	 	</tr>
<?php  $Connection;

$ViewQuery="SELECT * FROM jobs";
$ViewExecute=mysql_query($ViewQuery);
$SRNO="0";
while ($DataRows=mysql_fetch_array($ViewExecute)) 
{
	$FID=$DataRows['id'];
	$FDATE=$DataRows['date'];
	$FNAME=$DataRows['name'];
	$FDESC=$DataRows['desp'];
	$FDETAILS=$DataRows['details'];
	$FCPROFILE=$DataRows['cprofile'];
	$FLOGO=$DataRows['logo'];
	$SRNO++;
	?>

	<tr>
		<td> <?php echo $SRNO; ?> </td>
		<td> <img width="200px" height="110px" src="images/<?php echo $FLOGO; ?>"> </td>
		<td style="color: blue"> <?php if (strlen($FNAME)>20) { $FNAME=substr($FNAME,0,20)."..."; }
		 echo $FNAME; ?> </td>
		<td> <?php echo $FDATE ?> </td>
		
		
		<td> <?php if (strlen($FDESC)>20) { $FDESC=substr($FDESC,0,20)."..."; }
		 echo $FDESC; ?> </td>
		<td> <?php if (strlen($FDETAILS)>12) { $FDETAILS=substr($FDETAILS,0,12)."..."; }
		 echo $FDETAILS; ?> </td>
		<td> <?php if (strlen($FCPROFILE)>20) { $FCPROFILE=substr($FCPROFILE,0,20)."..."; }
		echo $FCPROFILE; ?> </td>

		<td>
				<a href="Editjob.php?Update=<?php echo $FID; ?>"><span class="btn btn-warning">Edit</span></a>
				<a href="DeleteJob.php?Delete=<?php echo $FID; ?>"><span class="btn btn-danger">Delete</span></a>
		</td>
		<td>
				<a href="jobs_single.php?click=<?php echo $FID; ?>" ><span class="btn btn-success">Preview</span></a><br>			
		</td>

	</tr>	

<?php } ?>


 
	 </table>
	   	  
	 
	 
   </div>
   </div>

 </div>
</div>
<div class="footer">
	<div class="container">
		<div class="col-md-3 grid_3">
			<h4>Navigate</h4>
			<ul class="f_list f_list1">
				<li><a href="index.html">Home</a></li>
				<li><a href="login.html">Sign In</a></li>
				<li><a href="login.html">Join Now</a></li>
				<li><a href="about.html">About</a></li>
			</ul>
			<ul class="f_list">
				<li><a href="features.html">Features</a></li>
				<li><a href="terms.html">Terms of use</a></li>
				<li><a href="contact.html">Contact Us</a></li>
				<li><a href="jobs.html">Post a Job</a></li>
			</ul>
			<div class="clearfix"> </div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Twitter Widget</h4>
			<div class="footer-list">
			  <ul>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
				<li><i class="fa fa-twitter tw1"> </i><p><span class="yellow"><a href="#">consectetuer</a></span> adipiscing elit web design</p></li>
			  </ul>
			</div>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Seeking</h4>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. </p>
		</div>
		<div class="col-md-3 grid_3">
			<h4>Sign up for our newsletter</h4>
			<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
			<form>
				<input type="text" class="form-control" placeholder="Enter your email">
				<button type="button" class="btn red">Subscribe now!</button>
		    </form>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_bottom">	
  <div class="container">
    <div class="col-sm-2">
  		<ul class="f_list2">
			<li><a href="jobs.html">Russia Jobs</a></li>
			<li><a href="jobs.html">Australia Jobs</a></li>
			<li><a href="jobs.html">Srilanka Jobs</a></li>
			<li><a href="jobs.html">Poland Jobs</a></li>
	    </ul>
  	</div>
  	<div class="col-sm-2">
  		<ul class="f_list2">
			<li><a href="jobs.html">New Zealand Jobs</a></li>
			<li><a href="jobs.html">Pakistan Jobs</a></li>
			<li><a href="jobs.html">Srilanka Jobs</a></li>
			<li><a href="jobs.html">Irland Jobs</a></li>
	    </ul>
  	</div>
  	<div class="col-sm-2">
  		<ul class="f_list2">
			<li><a href="jobs.html">Canada Jobs</a></li>
			<li><a href="jobs.html">Germany Jobs</a></li>
			<li><a href="jobs.html">China Jobs</a></li>
			<li><a href="jobs.html">Nepal Jobs</a></li>
	    </ul>
  	</div>
  	<div class="col-sm-6 footer_text">
       <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numqua"</p>
  	</div>
  	<div class="clearfix"> </div>
	<div class="copy">
		<p>Copyright © 2015 Seeking . All Rights Reserved . Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	</div>
  </div>
</div>
</body>
</html>	