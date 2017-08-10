<!DOCTYPE html>
<html>
<head>
  <title>RCOEM Open Elective</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
    width: 100%;
    height: 100%;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
.list {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    float: right;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
.footer {
  text-align: center;
  background:transparent;
}
</style>
</head>
<body style="background: url(Back.jpg);">

<div class="main" style="text-align:center;">

<div id="main">
 <nav class="navbar-inverse"style="background: rgba(255,255,255,0.1);">
    <div class="container-fluid" style="padding-top:20px;padding-bottom:20px;">
       <span style="font-size:20px;cursor:pointer;color: white;float: left;padding:10px;" onclick="openNav()">&#9776;</span>                                                    
    <div class="navbar-header">
            <a class="navbar-brand"  style="font-size: 30px; font-family: Times New Roman;padding-left:100px;padding-top: 15px;">RCOEM Open Elective System</a>          
    </div>
    
    <ul class="nav navbar-nav navbar-right"style="padding-right:25px">
      <li><a href="main.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="registration.html"><span class="glyphicon glyphicon-tasks"></span> Registration</a></li>
      <li><a href="result.php"><span class="glyphicon glyphicon-list-alt"></span> Result</a></li>
      <li><a href=http://rcoem.in><span class="glyphicon glyphicon-certificate"></span> Gems</a></li>
      <li><a href="http://www.rknec.edu/ContactUs.aspx"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
    </ul>
  </div>
</nav>
</div>
<div style="text-align:center;margin-top:10%;">
<h3 style="font-size:30px;font-family: Times New Roman;color:snow;">Successfully Registered Response of 
<?php 
include('config.php');
//Fetching Values from URL  
$Name= $_POST['Name'];
$Gems_ID= $_POST['Gems_ID'];
$Dep= $_POST['Dep'];
$RTMNU= $_POST['RTMNU'];
$P1= $_POST['P1'];
$P2= $_POST['P2'];
$P3= $_POST['P3'];
$CGPA= $_POST['CGPA'];
// Establishing connection with server..
	$sql = "insert into reg_students(Name, Department, F_Priority, S_Priority, T_Priority, ENROLL_ID, CGPA) values ('{$Name}','{$Dep}','{$P1}' ,'{$P2}','{$P3}','{$RTMNU}','{$CGPA}')";

    if(mysqli_query($link,$sql))
	      echo $Name; 	
?>
</h3>
<h3 style="font-size:25px;font-family: Times New Roman;color:snow;">Your email address is: <?php echo $_POST["Gems_ID"]; ?></h3>
<div class="footer"style="color:snow;">
	        <a href="registration.html" style="font-size:20px;font-family: Times New Roman;">Click here for Registration</a>.
    </div>
</div>
</div>   
</body>
</html> 
