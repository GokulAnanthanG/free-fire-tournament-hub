<?php
$con=new mysqli("localhost","root","","ff");
$sql="DELETE FROM tournament WHERE id='{$_POST['inp']}' ";
if($con->query($sql)){
    echo"Touranament Deleted";
}
else{
    echo"something went wrong";
}
?>