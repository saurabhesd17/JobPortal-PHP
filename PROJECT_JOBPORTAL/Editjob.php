<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>
<?php 



$Update_Record=$_GET['Update'];
$showquery="SELECT * FROM jobs WHERE id='$Update_Record'";
$Update=mysql_query($showquery);

while($DataRows=mysql_fetch_array($Update))
{
     $FID=$DataRows['id'];
    $FDATE=$DataRows['date'];
    $FNAME=$DataRows['name'];
    $FDESC=$DataRows['desp'];
    $FDETAILS=$DataRows['details'];
    $FCPROFILE=$DataRows['cprofile'];
    $FJNAME=$DataRows['jname'];
    $FNUMBER=$DataRows['number'];
    $FDB_EMAIL=$DataRows['db_email'];
    $FWORK=$DataRows['work'];
    $FLOGO=$DataRows['logo'];
    $FCLOC=$DataRows['location'];
    
}   











if (isset($_POST['submit'])) 
{
	$CompanyName=mysql_real_escape_string($_POST["CompanyName"]);
	$CompanyProfile=mysql_real_escape_string($_POST["CompanyProfile"]);
	$JobName=mysql_real_escape_string($_POST["JobName"]);
	$JobDescription=mysql_real_escape_string($_POST["JobDescription"]);
	$Otherdetails=mysql_real_escape_string($_POST["Otherdetails"]);
	$Date=mysql_real_escape_string($_POST["date"]);
	$ContactNumber=mysql_real_escape_string($_POST["number"]);
	$Email=mysql_real_escape_string($_POST["email"]);
	$Work=mysql_real_escape_string($_POST["exp"]);
    $CompanyLocality=mysql_real_escape_string($_POST["CompanyLocality"]);

    $Image=$_FILES["images"]["name"];
    $Target="images/".basename($_FILES["images"]["name"]);       
    

	if (empty($CompanyName) || empty($Image) || empty($CompanyProfile) || empty($JobName) || empty($JobDescription) || empty($Otherdetails) || empty($Email) || empty($Date) || empty($ContactNumber) || empty($Work) || empty($CompanyLocality) ) 
	{
		
		?>   <script type="text/javascript">alert("All fields must be field out");</script> <?php
	}
	
	else
	{
		  
       

        $Query="UPDATE jobs SET name='$CompanyName',logo='$Image',cprofile='$CompanyProfile',jname='$JobName',desp='$JobDescription',details='$Otherdetails',date='$Date',number='$ContactNumber',db_email='$Email',work='$Work',location='$CompanyLocality' WHERE id=$FID ";

		$Execute=mysql_query($Query);	
        move_uploaded_file($_FILES["images"]["tmp_name"],$Target);	

       	if($Execute)
        {
            
            ?>   <script type="text/javascript">alert("Data Stored Successfully");</script> <?php           
			 	Redirect_to("Admin_panel.php");				

        }
        else
        {
		    ?>   <script type="text/javascript">alert("Something Went Wrong");</script> <?php			
        }
	}	

}


 ?>

<!DOCTYPE HTML>
<html>
<head>	
<title> Update Job </title>
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
		
   </div> 
</div>	
<div class="container">
    <div class="single">  
	   <div class="form-container">
        
        <h2> Update Job</h2>

        <form  method="post" id="form-data" action="" enctype="multipart/form-data">
          
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Company Name</label>
                <div class="col-md-9">
                    <input type="text" name="CompanyName" value="<?php echo $FNAME; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Add Banner</label>
                <div class="col-md-9">
                    <input type="file" name="images" value="<?php echo $FLOGO; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Company Profile</label>
                <div class="col-md-9">
                    <input type="text" name="CompanyProfile" value="<?php echo $FCPROFILE; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Company Locality</label>
                <div class="col-md-9">
                    <input type="text" name="CompanyLocality"  class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="firstName">Job Name</label>
                <div class="col-md-9">
                    <input type="text" name="JobName" value="<?php echo $FJNAME; ?>" class="form-control input-sm"/>
                </div>
            </div>
         </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Job Description</label>
                <div class="col-md-9">
                    <input type="text" name="JobDescription" value="<?php echo $FDESC; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Other details</label>
                <div class="col-md-9">
                    <input type="text" name="Otherdetails" value="<?php echo $FDETAILS; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="dob">Date</label>
                <div class="col-md-9">
                    <input type="date" name="date" value="<?php echo $FDATE; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="lastName">Contact Number</label>
                <div class="col-md-9">
                    <input type="text" name="number" value="<?php echo $FNUMBER; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="email">Email</label>
                <div class="col-md-9">
                    <input type="email" name="email" value="<?php echo $FDB_EMAIL; ?>" class="form-control input-sm"/>
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="form-group col-md-12">
                <label class="col-md-3 control-lable" for="country">Required Work Experience</label>
                <div class="col-md-9">
                    <select value="<?php echo $FWORK; ?>" name="exp" class="form-control input-sm">
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
                         <option >16 above</option>      
                    </select>
                    
                </div>
            </div>
        </div>
       
       
        <div action="submit" class="row">
            <div class="form-actions floatRight">
                <input type="submit" name="submit" id="reg-btn" value="Update This Job" class="btn btn-primary btn-sm">
            </div>
        </div>

        

        
    </form>
    </div>
 </div>
</div>

<?php include("footer.php"); ?>
</body>
</html>	