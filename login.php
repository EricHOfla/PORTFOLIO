<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="icon" type="text/css" href="assets/img/icon.jpg">
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
  	input{
  		border-radius: 6px;
  		border-bottom: solid grey;
  	}

  </style>
  
</head>
<body  style=" background :linear-gradient(rgba(41, 41, 80, 0.5),rgba(39, 39, 75, 0.5))
, url(assets/img/testimonial-2.jpg); background-size: 70px;">
	<div class="col-lg-12">
	<center><br><br>
	<form class="form-control" method="POST" style="box-shadow: 0px 0px 20px rgba(1, 41, 112, 0.1);
  background-color: #F9F5F5; width: 25rem;float: right; margin-right: 5rem; height: 37rem">
  <img width=250px;   style="border-radius: 12%; padding: 20px" src="assets/img/testimonial-2.jpg"><br>
		<h3>LOGIN FORM</h3><br><br>

		<input type="text" name="username" placeholder="Enter your username" required=""><br><br>
		<input type="password" name="password" placeholder="Enter your password" required=""><br><br>
		<input class="btn btn-success" type="submit" name="login" value="login"><br><br>
         

	</form>
   </center></div>
</body>
</html>



 <?php 
  session_start();

include('admin/connect.php');




if (isset($_POST['login'])) {
	

$username=$_POST['username'];
$password=$_POST['password'];


$sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ";
$result=mysqli_query($conn,$sql);
  if (mysqli_num_rows($result) > 0) {

            $rows = mysqli_fetch_array($result);

          
if($rows["account_type"] == "User")
{
	$_SESSION["username"] = $username;
	$_SESSION["account_type"] = "User";
	header("location:user/");	
	

 }


else if($rows["account_type"] )
{
	$_SESSION["username"] = $username;
	$_SESSION["account_type"] = "Admin";
		header("location:admin/");

	
	 
 }	 
 



}
else{

	
   echo " <script> alert('Incorrect username or password')</script>";

}

}
  ?> 