<?php
$con=new mysqli("localhost","root","","ff");
$num=0;
$sql="SELECT * FROM tournament WHERE tourType='prize' ";
if($res=$con->query($sql)){
  
    if($res->num_rows>0){
        while($res->fetch_object()){
$num+=1;
         }
        echo $num;
    }
    echo $num;
}
else{
    echo"something went  wrong";
}
 ?>