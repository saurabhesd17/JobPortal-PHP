<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Session.php"); ?>
<?php require_once("Include/functions.php"); ?>

<?php


$Delete_record_id=$_GET['Delete'];	
$Delete_Query=" DELETE FROM jobs WHERE id='$Delete_record_id' ";
$Execute=mysql_query($Delete_Query);
if ($Execute) 
{
	Redirect_to('Admin_panel.php');
	?>   <script type="text/javascript">alert("Job Deleted Successfully");</script> <?php
}
else
{
	Redirect_to('Admin_panel.php');
	?>   <script type="text/javascript">alert("Something Went Wrong");</script> <?php
}




?>