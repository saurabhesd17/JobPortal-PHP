<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>
<?php 
if (isset($_POST['submit'])) 
{
	$FirstName=mysql_real_escape_string($_POST["firstname"]);
	$LastName=mysql_real_escape_string($_POST["lastname"]);
	$MiddleName=mysql_real_escape_string($_POST["midname"]);
	$Mobile=mysql_real_escape_string($_POST["number"]);
	$Sex=mysql_real_escape_string($_POST["gender"]);
	$DOB=mysql_real_escape_string($_POST["date"]);
	$Email=mysql_real_escape_string($_POST["email"]);
	$SetPass=mysql_real_escape_string($_POST["pass"]);
	$ConfPass=mysql_real_escape_string($_POST["confirmpass"]);
	$Work=mysql_real_escape_string($_POST["exp"]);
	$Education=mysql_real_escape_string($_POST["edu"]);

	if (empty($FirstName) || empty($LastName) || empty($MiddleName) || empty($Mobile) || empty($Sex) || empty($DOB) || empty($Email) || empty($SetPass) || empty($Work) || empty($Education) ) 
	{
		
		?>   <script type="text/javascript">alert("All fields must be field out");</script> <?php
	}
	else
	{
		if ($SetPass!=$ConfPass) 
		{
		?>   <script type="text/javascript">alert("Password not match");</script> <?php			
		}
	else
	{
		
		  $Query="INSERT INTO register(fname,mname,lname,phone,gender,dob,db_email,db_pass,exp,edu) 
					VALUES('$FirstName','$MiddleName','$LastName','$Mobile','$Sex','$DOB','$Email','$SetPass','Work','Education')";
			$Execute=mysql_query($Query);		


       		if($Execute)
          {
            
				$_SESSION["SuccessMessage"]="Data Successfully created";
			 	Redirect_to("login.php");				

          }
          else
          {
		?>   <script type="text/javascript">alert("Something Went Wrong");</script> <?php			
          }
	}	
	}
}



 ?>

<!DOCTYPE HTML>
<html>
<head>	
<title> Register </title>
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
<?php include("header.php"); ?>

<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
			 <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
			 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			</p>
           </div>
		</div>
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="form-container">
        
        <h2>Register Form</h2>

        <form  method="post" id="form-data" action="" >
          <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">First Name</label>
                <div class="col-md-9">
                    <input type="text" name="firstname"  class="form-control input-sm"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Middle Name</label>
                <div class="col-md-9">
                    <input type="text" name="midname"  class="form-control input-sm"/>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Last Name</label>
                <div class="col-md-9">
                    <input type="text" name="lastname"  class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Mobile Number</label>
                <div class="col-md-9">
                    <input type="text" name="number"  class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="sex">Sex</label>
                <div class="col-md-9" class="form-control input-sm">
                    <div class="radios">
				        <select name="gender" class="form-control selectpicker" >
	             		 	<option value=" " >Please select your Gender</option>
	              			<option>Female</option>
	              			<option>Male</option> 
	              			<option>Other</option> 
	            		</select>
	                </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Date of birth</label>
                <div class="col-md-9">
                    <input type="date" name="date" class="form-control input-sm"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="email" name="email" class="form-control input-sm"/>
                </div>
            </div>
        </div>
       
       <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Set password</label>
                <div class="col-md-9">
                    <input type="password" name="pass" class="form-control input-sm"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Confirm password</label>
                <div class="col-md-9">
                    <input type="password" name="confirmpass" class="form-control input-sm"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Work Experience</label>
                <div class="col-md-9">
                    <select value="" name="exp" class="form-control input-sm">
                        <option >Select</option>
                        <option >Fresher</option>
                        <option >0</option>
                        <option >1</option>
                        <option >2</option>
                        <option >3</option> 
                        <option >4</option> 
                        <option >5</option> 
                        <option >6</option> 
                        <option >7</option> 
                        <option >8</option> 
                        <option >9</option> 
                        <option >10</option> 
                        <option >11</option>
                        <option >12</option>  
                        <option >13</option>
                        <option >14</option>
                        <option >15</option>      
                    </select>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Education</label>
                <div class="col-md-9">
                    <select value="" name="edu" class="form-control input-sm">
                        <option >Select</option>
                        <option >Bsc</option>
                        <option >BTech</option>
                        <option >Mca</option>
                        <option >BCA</option>
                        <option >Diploma</option> 
                        <option >Other</option> 
                    </select>
               </div>
            </div>
        </div>
       
        <div action="submit" class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="submit" id="reg-btn" value="Register" class="btn btn-primary btn-sm">
            </div>
        </div>

        

        
    </form>
    </div>
 </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>	