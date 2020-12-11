<?php
$con=new mysqli("localhost","root","","ff");
$sql="DELETE  FROM tournament";
if($con->query($sql)){
    echo"Deleted";
}
else{
    echo"Somthing Went Wrong :(";
}
 ?>