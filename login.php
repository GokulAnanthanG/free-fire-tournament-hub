<?php
$con=new mysqli("localhost","root","","ff");
$sql="SELECT * FROM login WHERE name='{$_POST['name']}' AND name='{$_POST['name']}' ";
if($res=$con->query($sql)){
    if($res->num_rows>0){
        echo"Loging In :)";
    }
    else{
        echo"Invalid user name password";
    }
}
else{
    echo"something went wrong";
}
?>
