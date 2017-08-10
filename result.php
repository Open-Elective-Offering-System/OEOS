<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	 <title>RCOEM Open Elective Registration</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<style>

.footer {
  text-align: center;
  background:transparent;
}
#body{
	background: url('Back.jpg');padding: 10px;width:100%;height:100%;
  text-align: center;
}
div.container{
	border-radius: 10px;
  background: rgba(100,100,200,0.3); 
	margin-top: 3%; 
	width:60%; 
  margin-left: 20%;
  margin-right: 20%;
   margin-bottom:5%;
}
tr.bottom_bar{
  text-align: center;
  height: 10%;
}
header{
	 text-align: center;
	 width: 100%;
	 padding: 10px;
     font-size: 25px;
	 font-family: Times New Roman;   
	 color: snow;
	 height: 10%;
}
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 1px;
} 
.side_bar{
	float:left;
	border-radius: 10px;
  width: 97%;
  margin: 3%;
  text-align: center;
}
.side_container{
	float:left;
	padding: 10px;
	margin:3%;
	border-style: solid;
   border-width: 3px;
	border-color: snow;
	border-radius: 5px;
  width: 97%;
  height: 250px;
  text-align: center;
}
td{
   text-align: center;
}

button{
  border-style: solid;
  border-width: 1px;
	border-color: snow;
	border-radius: 3px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 3px;
  padding-bottom:2px; 
  background:transparent;
  color: snow;
  text-align: center;
}
#l1
{
 	 border-radius: 5px;
   text-align: center;
   margin: 5px; 
   border-width:3px; 
   color: snow;
   background:transparent;
   border-color: snow; 
}
#l2
{
 	 border-radius: 5px;
   text-align: center;
   margin: 5px; 
   border-width:3px; 
   color: snow;
   background:transparent;
   border-color: snow;
}
#l3
{
 	 border-radius: 5px;
   text-align: center;
   margin: 5px; 
   border-width:3px; 
   border-color: snow;
   color: snow;
   background:transparent;
}
#l4
{
 	 border-radius: 5px;
   text-align: center;
   margin: 5px; 
   border-width:3px; 
   color: snow;
   background:transparent;
   border-color: snow;
}
#l5
{
 	 border-radius: 5px;
   text-align: center;
   margin: 5px; 
   border-width:3px; 
   color: snow;
   background:transparent;
   border-color: snow;
}
</style>

<body id="body">
<nav class="navbar-inverse"style="background: rgba(255,255,255,0.1);">
  <div class="container-fluid" style="padding-top:20px;padding-bottom:20px;">
    <div class="navbar-header">
            <a class="navbar-brand"  style="font-size: 30px; font-family: Times New Roman;padding-left:100px;padding-top: 15px;">RCOEM Open Elective System</a>          
    </div>
    
    <ul class="nav navbar-nav navbar-right"style="padding-right:25px">
      <li><a href="main.html"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="registration.html"><span class="glyphicon glyphicon-tasks"></span> Registration</a></li>
      <li><a href="result.html"><span class="glyphicon glyphicon-list-alt"></span> Result</a></li>
      <li><a href=http://rcoem.in><span class="glyphicon glyphicon-certificate"></span> Gems</a></li>
      <li><a href="http://www.rknec.edu/ContactUs.aspx"><span class="glyphicon glyphicon-earphone"></span> Contact</a></li>
    </ul>
  </div>
</nav>
<div class="container">
<table style="width:100%">
<col width="25%">
<col width="75%">
<tr>
  <td colspan="2">
<header>
   Select your Priority of Search
</header>
  </td>
</tr>
<tr>
  <td colspan="2">
   <hr>
  </td>
</tr>
<tr>
  <td>
<div class="side_bar">
<div class="list-group">
  <button type="button"  class="list-group-item list-group-item-action" onclick="changeClass(1);" id="l1">Student</button>
  <button type="button"  class="list-group-item list-group-item-action" onclick="changeClass(2);" id="l2">Department</button>
  <button type="button"  class="list-group-item list-group-item-action" onclick="changeClass(3);" id="l3">Subject</button>
  <button type="button"  class="list-group-item list-group-item-action" onclick="changeClass(4);" id="l4">RTMNU ROLL NO.</button>
  <button type="button"  class="list-group-item list-group-item-action" onclick="changeClass(5);" id="l5">Show All</button>
</div>   
</div>
</td>
<td>
<div class="side_container" id="container1">
<div class="form-horizontal">
    <form class="form-group" id="name" style="display:none;margin-top:15%"action="result_1.php" method="post">
      <label class="control-label col-sm-3"style="text-align:center;color:snow;font-family: Times New Roman;" >Student Name:</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="Name" placeholder="Name" name="Name">
      </div>
      <div class="bottom_bar" style="margin-top:15%">
	             <button type='submit'class="search" style="font-family: Times New Roman;height: 30px;width:200px;background: rgba(200,200,200,0.7);color: darkblue;" onclick="search();">SEARCH</button>
     </div>
    </form>
    <form class="form-group" id="dep" style="display:none;margin-top:15%"action="result_2.php" method="post">        
	  <label class="control-label col-sm-3"style="text-align:center;color:snow;font-family: Times New Roman;">Department:</label>
			<select class="col-sm-9" style="width:70%;height:32px;margin-left: 2.5%;padding-right: 5%;	border-radius: 4px;"name="Dep">
			                      <option disabled="" selected=""></option>
		                        <option>Computer Science and Engineering</option>
		                      	<option>Information Technology</option>
		                       	<option>Electronics and Communication</option>
      </select>	 
      <div class="bottom_bar" style="margin-top:15%">
	             <button type='submit'class="search" style="font-family: Times New Roman;height: 30px;width:200px;background: rgba(200,200,200,0.7);color: darkblue;" onclick="search();">SEARCH</button>
     </div>                                   	
    </form>
    <form class="form-group" id="sub" style="display:none;margin-top:15%" action="result_3.php" method="post">        
	  <label class="control-label col-sm-3" style="text-align:center;color:snow;font-family: Times New Roman;">Subject:</label>
			<select class="col-sm-9" style="width:70%;height:32px;margin-left: 2.5%;padding-right: 5%;	border-radius: 4px;" name="sub">
			<option disabled="" selected=""></option>
		   <option>CSU301</option> <option>CSU302</option> <option>ECU301</option> <option>ECU302</option>  <option>ICU301</option> <option>ICU302</option>  
	    </select>	
      <div class="bottom_bar" style="margin-top:15%">
	             <button type='submit'class="search" style="font-family: Times New Roman;height: 30px;width:200px;background: rgba(200,200,200,0.7);color: darkblue;" onclick="search();">SEARCH</button>
     </div>                                    	
    </form>
    <form class="form-group" id="RTMNU" style="display:none;margin-top:15%"action="result_4.php" method="post">
      <label class="control-label col-sm-3"style="text-align:center;color:snow;font-family: Times New Roman;">RTMNU Roll No.:</label>
      <div class="col-sm-9">          
        <input type="text" class="form-control" placeholder="Roll No." name="RTMNU">
      </div>
      <div class="bottom_bar" style="margin-top:15%">
	             <button type='submit'class="search" style="font-family: Times New Roman;height: 30px;width:200px;background: rgba(200,200,200,0.7);color: darkblue;" onclick="search();">SEARCH</button>
     </div>
    </form>
     <form class="form-group" id="Priority" style="display:none;margin-top:15%"action="result_5.php" method="post">
      <div class="bottom_bar" style="margin-top:15%">
	             <button type='submit'class="search" style="font-family: Times New Roman;height: 30px;width:200px;background: rgba(200,200,200,0.7);color: darkblue;" onclick="search();">SEARCH</button>
     </div>                                  	
     </form>
  </div>
</div>
</td>
</tr>
<tr>
  <td colspan="2">
   <hr>
  </td>
</tr>
<tr>
<td colspan="2" align="center" style="padding-bottom:10px;">
 
  </td>
</tr>
</table>

</div>
	
	    
<br>
    <div class="footer"style="color:snow;">
	            Our main site <a href="http://www.rknec.edu">RamdeoBaba College Nagpur</a>.
    </div>
<script language="javascript"> 

  function search(){
    window.location.href = "http://localhost:8000/PAS/result_1.php"; 
    window.onload = function() {
   var getInput = prompt("Hey type something here: ");
   localStorage.setItem("storageName",getInput);
}
  }
  function changeClass(k){
    if(k==1)
    {
      if(document.getElementById("name").style.display=== "none")
      {
           document.getElementById("name").style.display= "block"; 
           document.getElementById("dep").style.display= "none";
           document.getElementById("sub").style.display= "none"; 
           document.getElementById("RTMNU").style.display= "none";
           document.getElementById("Priority").style.display= "none";  
           document.getElementById("l1").style.background= "rgba(100,100,200,0.5)"; 
           document.getElementById("l2").style.background= "transparent"; 
           document.getElementById("l3").style.background= "transparent"; 
           document.getElementById("l4").style.background= "transparent"; 
           document.getElementById("l5").style.background= "transparent"; 
      }
      else
      {
           document.getElementById("name").style.display= "none"; 
           document.getElementById("l1").style.background= "transparent"; 
      }
    }
    if(k==2)
    {
      if(document.getElementById("dep").style.display=== "none")
      {
           document.getElementById("dep").style.display= "block"; 
           document.getElementById("name").style.display= "none"; 
           document.getElementById("sub").style.display= "none"; 
           document.getElementById("RTMNU").style.display= "none";
           document.getElementById("Priority").style.display= "none"; 
           document.getElementById("l2").style.background= "rgba(100,100,200,0.5)"; 
           document.getElementById("l1").style.background= "transparent"; 
           document.getElementById("l3").style.background= "transparent"; 
           document.getElementById("l4").style.background= "transparent";
           document.getElementById("l5").style.background= "transparent";  
      }
      else
      {
           document.getElementById("dep").style.display= "none";
           document.getElementById("l2").style.background= "transparent"; 
      } 
    }
    if(k==3)
    {
      if(document.getElementById("sub").style.display=== "none")
      {
           document.getElementById("sub").style.display= "block";
           document.getElementById("name").style.display= "none"; 
           document.getElementById("dep").style.display= "none";
           document.getElementById("RTMNU").style.display= "none";
           document.getElementById("Priority").style.display= "none";  
           document.getElementById("l3").style.background= "rgba(100,100,200,0.5)"; 
           document.getElementById("l1").style.background= "transparent";  
           document.getElementById("l2").style.background= "transparent";  
           document.getElementById("l4").style.background= "transparent";  
           document.getElementById("l5").style.background= "transparent";  
      }
      else
      {
           document.getElementById("sub").style.display= "none"; 
           document.getElementById("l3").style.background= "transparent"; 
      }
    }
    if(k==4)
    {
      if(document.getElementById("RTMNU").style.display=== "none")
      {
           document.getElementById("RTMNU").style.display= "block"; 
           document.getElementById("name").style.display= "none"; 
           document.getElementById("dep").style.display= "none";
           document.getElementById("sub").style.display= "none"; 
           document.getElementById("Priority").style.display= "none"; 
           document.getElementById("l4").style.background= "rgba(100,100,200,0.5)"; 
           document.getElementById("l1").style.background= "transparent";  
           document.getElementById("l2").style.background= "transparent";
           document.getElementById("l3").style.background= "transparent";
           document.getElementById("l5").style.background= "transparent";  
      }
      else
      {
           document.getElementById("RTMNU").style.display= "none";  
           document.getElementById("l4").style.background= "transparent"; 
      }
    }
     if(k==5)
    {
      if(document.getElementById("Priority").style.display=== "none")
      {
           document.getElementById("Priority").style.display= "block";
           document.getElementById("name").style.display= "none"; 
           document.getElementById("dep").style.display= "none";
           document.getElementById("sub").style.display= "none"; 
           document.getElementById("RTMNU").style.display= "none"; 
           document.getElementById("l5").style.background= "rgba(100,100,200,0.5)";
           document.getElementById("l1").style.background= "transparent";
           document.getElementById("l2").style.background= "transparent";
           document.getElementById("l3").style.background= "transparent";
           document.getElementById("l4").style.background= "transparent"; 
      }
      else
      {
           document.getElementById("Priority").style.display= "none";  
           document.getElementById("l5").style.background= "transparent"; 
      }
    }
} 

</script>
</body>

	

</html>
