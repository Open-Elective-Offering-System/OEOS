<?php
include('config.php');
$sql_1 = "create table sorted_students_2 as (select * from reg_students where status = '0' ORDER BY CGPA DESC)";
if(mysqli_query($link,$sql_1))
   echo 'Sorted';
$max=0;
$sql_0 = "select SNO from reg_students";
$result = $link->query($sql_0);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
    $in = $row['SNO'];
    if($in> $max)
    $max=$in;
    }
}
echo "<br>No of Students:".$max."<br>";



$sql_2 = "select SR_No from subject";
$result = $link->query($sql_2);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
    $cnt = $row['SR_No'];
    }
}
echo " <br> $cnt <br>";
$x=1;
while($x <= $cnt) {
    $sql_3 = "select SUBJECT_INTAKE,SUBJECT_ID from subject where SR_No='$x'";
    $result = $link->query($sql_3);
    $row = $result->fetch_assoc();
    $intake = $row['SUBJECT_INTAKE'];
    $sid = $row['SUBJECT_ID'];
    $y=$intake;
    $c=1;
    echo "<br>".$intake.":".$sid."<br>";
    $eid=0;
    $sql_4 = "select ENROLL_ID from sorted_students_2 where S_Priority = '$sid'";

        $result = $link->query($sql_4);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
                if($y>0)
                $eid = $row['ENROLL_ID'];
                echo "EID: ".$eid."<br>".$c."<br>";
                $c++;
                if($eid!=0)
                {
                    $sql_5 = "insert into result(ENROLL_ID,SUBJECT_ID) values('$eid','$sid')";
                    if(mysqli_query($link,$sql_5))
                      echo "<br<inserted<br>".$y."<br>";
                    $y--;
                    $sql_8= "UPDATE reg_students SET status = 1 WHERE ENROLL_ID = '$eid' ";
                    if(mysqli_query($link,$sql_8))
                       echo "<br>Status update";
                }
                $sql_6 = "insert into subject F_PRIOR_NO value '$y'";
                if(mysqli_query($link,$sql_6))
                echo "F_Priority Inserted".$sid."Value".$y."<br>";
            }
          }
          $sql_7= "UPDATE subject SET SUBJECT_INTAKE = '$y' WHERE SUBJECT_ID = '$sid' ";
          if(mysqli_query($link,$sql_7))
           echo "<br>Subject".$sid."updates to ".$y."<br>";
    $x++;
} 
?>

