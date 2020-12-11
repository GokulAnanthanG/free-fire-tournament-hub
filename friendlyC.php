<?php
$con=new mysqli("localhost","root","","ff");
$sql="SELECT * FROM tournament WHERE tourType='Friendly' ";
if($res=$con->query($sql)){
    $num=0;
    if($res->num_rows>0){
        while($res->fetch_object()){
$num++;
        }
        echo $num;
    }
    echo $num;
}
else{
    echo"something went  wrong";
}
 ?>