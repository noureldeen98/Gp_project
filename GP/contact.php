<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>welcome page</title>
<!-- Latest compiled and minified CSS -->
<link href="E:\first term\GP\Sec try\New folder\Covid-19 prediction using X-Ray images_\webapp\GP uI\css\bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="E:\first term\GP\Sec try\New folder\Covid-19 prediction using X-Ray images_\webapp\GP uI\Register.css">



</head>

<body class="bg-img"> 
  
  <!-- class="bg-light"-->
 
<!-- <img class="bg-img" src="iStock-1213090148.jpg" height="100vh">-->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <p style="margin-top: 5px;font-weight: bolder;">COVID-19 <span style="color: crimson;">prediction</span></p>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Home.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="Login.html">Login</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
   <script src="E:\first term\GP\Sec try\New folder\Covid-19 prediction using X-Ray images_\webapp\GP uI\js\jqeury-1.11.js"></script>
        
<script src="E:\first term\GP\Sec try\New folder\Covid-19 prediction using X-Ray images_\webapp\GP uI\js\bootstrap.js"></script>
</body>
</html>

<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact',3308);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// get the post records

$txtName = $_POST['txtName'];
$password=$_POST['txtPass'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

$sql_e = "SELECT * FROM tbl_contact WHERE fldEmail='$txtEmail'";
$res_e = mysqli_query($con, $sql_e);
	if(mysqli_num_rows($res_e) > 0){
		echo "Sorry this user is already exsits...Try sign Up with new Email address";
		}
	else{
// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`,`password`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName','$password','$txtEmail', '$txtPhone', '$txtMessage')";
$sqllogin = "INSERT INTO `login` (`id`,`Email`,`password`) VALUES ('0','$txtEmail','$password')";

// insert in database 
$rs = mysqli_query($con, $sql);
$rslogin = mysqli_query($con, $sqllogin);
if($rs)
{
	//header("location:../../../E:\first term\GP\Sec try\New folder\Covid-19 prediction using X-Ray images_\webapp\GP uI\Login.html");
	//header("location: /E:\first term\GP\Sec try\New folder\Covid-19 prediction using X-Ray images_\webapp\GP uI\Login.html");
	header("location: Login.html");

	//echo "You are now one member of our community *_* ...Now you can login to start with us";
	//echo '<a href="http://127.0.0.1:5000/"> Click here </a>';

}
//}
else
{
	//echo "Are you a genuine visitor?";
	echo "error : ".mysqli_error($con);
	
}
}
}
?>
