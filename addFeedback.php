<?php
$con=new mysqli("localhost","root","","ff");
if($con->connect_error){
    echo"Somthing went wrong :(";
}
$sql="INSERT INTO feedback(email,name,feedback) VALUE('{$_POST['email']}','{$_POST['name']}','{$_POST['feedback']}')";
if($con->query($sql)){
    echo"Feedback Added";
}
else{
    echo"Somthing went wrong :(";
}
?>