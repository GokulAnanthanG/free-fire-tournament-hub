<?php
 
  
 $con=new mysqli("localhost","root","","ff");
 if($con->connect_error){
     echo"Error";
 }
 else{
     $sql="INSERT INTO tournament(tourName,des,tourType,date,entryFee,meridium,time,mapType,phoneNo,rules) VALUES('{$_POST["touranamentName"]}','{$_POST["des"]}','{$_POST["tt"]}','{$_POST["date"]}','{$_POST["entryFee"]}','{$_POST["meridiam"]}','{$_POST["time"]}','{$_POST["mapType"]}','{$_POST["pno"]}','{$_POST["rules"]}')";
 if($con->query($sql)){
     echo"Tournament Added";
}
else{
    echo"Somthing went wroung";
}
    }
?>