<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>registeration form</title>
<!-- Latest compiled and minified CSS -->
<link href="css\bootstrap.css" rel="stylesheet">
<link rel="stylesheet" href="Register.css">



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
          <a class="nav-link active" href="contact.html">Register</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
</body>
</html>


<?php
// database connection code
if(isset($_POST['txtEmail']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_contact',3308);

if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

// get the post records


$password=$_POST['txtPass'];
$txtEmail = $_POST['txtEmail'];

$select=" SELECT id FROM login WHERE password= '$password' AND Email= '$txtEmail' ";


// insert in database 
$result = mysqli_query($con, $select);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
//$active = $row['active'];
$count = mysqli_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){
	/*echo "lets start our job";
	echo '<a href="http://127.0.0.1:5000/"> Click here </a>';*/
	header("Location: http://127.0.0.1:5000/");//mfesh 7aga sh8ala 8iro 5las
	//header("Location:templates\Predict_page.html");
}
/*if($result)
{
	//echo "".$rs;
	echo "lets start our job";
	echo '<a href="http://127.0.0.1:5000/"> Click here </a>';

}*/
//}
else
{
	
	echo "<h3> Are you a genuine visitor?<br/>
	 please regist your credentials first </h3>";
	//echo "error : ".mysqli_error($con);
	
}
}
?>
