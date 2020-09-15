<?php require_once("DB.php"); ?>
<?php require_once("Session.php"); ?>

<?php 

function Redirect_to($New_Location)
{
		header("Location:$New_Location");
		exit;
}

function Login_attempt($Username,$Password)
{
	
	$Connection;
	$Query="SELECT * FROM register WHERE db_email='$Username' AND db_pass='$Password'";
	$Execute=mysql_query($Query);
	if ($admin=mysql_fetch_assoc($Execute)) 
	{
		return $admin;
	}
	else
	{
		return null;
	}

}

function Admin_Login_attempt($Username,$Password)
{
	
	$NAME="saurabhkalaskar50@gmail.com";
	$PASS="saurabh1997";
	if ($Username==$NAME && $Password==$PASS) 
	{
		?>   <script type="text/javascript">alert("Welcome Saurabh");</script> <?php
		Redirect_to('Admin_panel.php');
	}
	else
	{
		?>   <script type="text/javascript">alert("Username / Password not matched");</script> <?php
	}

}


function Signin_attempt($Username)
{

	$Connection;
	$Query="SELECT * FROM signup WHERE db_email='$Username'";
	$Execute=mysql_query($Query);
	if ($admin=mysql_fetch_assoc($Execute)) 
	{
		$_SESSION["ErrorMessage"]="Username alredy taken";
		Redirect_to("login.php");
	}
	else
	{
		return null;
	}
}

function Login()
{
	if (isset($_SESSION["User_Id"])) 
	{
		return true;
	}
	else
	{
		Redirect_to("login.php");
			?>   <script type="text/javascript">alert("Login Required");</script> <?php
	}
}

function confirm_login()
{
	if (!Login()) 
	{
		Redirect_to("login.php");
	}
}



 ?>