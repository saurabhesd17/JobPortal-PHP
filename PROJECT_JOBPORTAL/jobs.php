<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>
<?php Login(); ?>
<?php 

if (!isset($_SESSION['Uname'])) 
{
	header('location: login.php');
	exit();
}
$username=$_SESSION['Uname'];
$url = "page2.php?username=".$username;
	
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Seeking an Job Portal </title>
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
<?php include("header.php"); ?>
<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
		    	<form action="jobs.php">
			 <input type="text" class="text" name="search" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
			
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" name="btnsearch" value="Find Jobs"></label>
			</form>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
        <div class="col-sm-10 follow_left">
			<h3>All Jobs</h3>
			<?php 

				if (isset($_GET['btnsearch'])) 
				{
				
					$Search=$_GET['search'];
					$Query="SELECT * FROM jobs WHERE date LIKE '%$Search%' OR name LIKE '%$Search%' OR desp LIKE '%$Search%'
					 OR details LIKE '%$Search%' OR cprofile LIKE '%$Search%' OR jname LIKE '%$Search%' OR number LIKE '%$Search%'
					  OR db_email LIKE '%$Search%' OR work LIKE '%$Search%' OR location LIKE '%$Search%' ";
					  
					 
				}
				else{
				$Query="SELECT * FROM jobs ";}
				$Execute=mysql_query($Query);
				while($DataRows=mysql_fetch_array($Execute))
				{
					$ID=$DataRows['id'];
					$EName=$DataRows['name'];
					$EDesc=$DataRows['desp'];
					$EDetails=$DataRows['details'];
					$Eprofile=$DataRows['cprofile'];
					$Elogo=$DataRows['logo'];
				    $FDATE=$DataRows['date'];
				    $FJNAME=$DataRows['jname'];
				    $FNUMBER=$DataRows['number'];
				    $FDB_EMAIL=$DataRows['db_email'];
				    $FWORK=$DataRows['work'];
				    $FCLOC=$DataRows['location'];
					

			?>
             <div class="jobs_follow jobs-single-item">
				<div class="thumb"><img src="images/<?php echo $Elogo; ?>" class="img-responsive" alt=""/></div>
				<div class="thumb_right">
				<div class="date">30 <span>Jul</span></div>
				<h6 class="title"><a href="jobs_single.php?click=<?php echo $ID; ?>"> <?php echo $EName; ?></a></h6>
				<span class="meta"> <?php echo $FCLOC; ?> </span>
				<ul class="top-btns">
					<li>
						<a href="#" class="btn_1 fa fa-star-o icon_2"></a>
					</li>
				</ul>
				<p>Job Description</p>
				<p><!-- <?php echo $EDesc; ?> -->
					
					<?php 
								 	 if (strlen($EDesc)>40) 
								 	 {
								 	 	$EDesc=substr($EDesc,0,243).'... read more';
								 	 }
								 	  echo $EDesc;  ?>

				</p>
                <br>
                <a href="resume.php" class="btn btn-success pull-left" >Apply for this Job</a>
	         <br><hr>
				<!-- Modal -->
				
	           
				<div class="clearfix"> </div>
		    
		    </div> 
		    
		   <div class="clearfix"> </div>
		   
		   </div>
		   <br>	
		    <?php  } ?>
				<div class="clearfix"> </div>
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