<?php
error_reporting(0);
?><!DOCTYPE html>
<html>
<head>
  <title>RCOEM Open Elective</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
<style>
#rcorners {

    border-radius: 10px;
    background: rgba(100,100,200,0.3);  
    padding: 2%; 
    width: 86%;
    margin-top:3%;
    margin-bottom:5%;
    margin-left: 7%;
    margin-right: 7%;
    float: left; 
    font-family: Times New Roman;  
    
}
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
.th{
    text-align: center;
    font-size: 15px; 
    font-family: Times New Roman;

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
	<div>
	 <ul id="rcorners">
        <p style="font-size:20px;  color: rgba(255,255,255,1); ">
            List of Students
        </p>
         <hr>
        <ul style="list-style-type:circle;  color: rgba(200,200,200,0.8);float: left; ">     
            <table>
            <tr>
                <th width="9%" height="40"style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> Name </u></th>
                <th width="15%" style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> Department </u></th>
                <th width="15%" style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> Subject </u></th>
                <th width="15%" style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> Teacher</u></th>
                <th width="15%" style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> First Priority </u></th>
                <th width="15%" style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> Second Priority </u></th>
                <th width="15%" style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> Third Priority </u></th>
                <th width="7%" style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> ENROLL </u></th>
                <th width="7%" style="text-align: center; font-size: 18px;color: rgba(255,255,255,1);"><u> CGPA </u></th>
            </tr>   
      <?php
        include('config.php');
       $sql = "SELECT DISTINCT * FROM DEPARTMENT AS D JOIN STAFF AS ST ON ST.DEPT_ID = D.DEPT_ID JOIN SUBJECT AS S ON S.SUBJECT_ID = ST.SUBJECT_ID JOIN RESULT AS R ON R.SUBJECT_ID = S.SUBJECT_ID JOIN REG_STUDENTS AS RS ON RS.ENROLL_ID = R.ENROLL_ID";
      $result = $link->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              
               echo "<tr> <td height=50>".$row["Name"]."</td> 
                    <td>".$row["Department"]."</td> 
                    <td>".$row["SUBJECT_ID"]."</td>
                    <td>".$row["F_Priority"]."</td> 
                    <td>".$row["S_Priority"]."</td> 
                    <td>".$row["T_Priority"]."</td> 
                    <td>".$row["ENROLL_ID"]."</td> 
                    <td>".$row["CGPA"]."</td>
                    </tr>";
            }
            echo"<table>";
        } else {
            echo "0 results";
        }
        $link->close();
        ?>
        </ul>  
      </ul>
    </div>  
</body>
</html> 
