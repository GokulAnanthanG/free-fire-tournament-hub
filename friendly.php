<?php
$con=new mysqli("localhost","root","","ff");
if($con->connect_error){
    echo"Error";
}
$firendly="Friendly";
$sql="SELECT * FROM tournament WHERE tourType='$firendly' ";
$res=$con->query($sql);
if($res->num_rows>0){
    $num=0;
while($row=$res->fetch_object()){
    $num++;
echo"<div class='col-md-12 well'><h4 class='tourName'>$row->tourName</h4>

<p class='td'><span>$row->date</span>&nbsp<span>$row->time&nbsp;$row->meridium</span></p><h5 class='detail'><span>TOURNAMENT type:<b>$row->tourType</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Map type:<b>$row->mapType</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Entry Fee:<b>$row->entryFee</b></span></h5>
<br>
<h3 class='pno'>Phone No:<span class='no'>$row->phoneNo</span></h3>
<hr>
<div class='flex'>
<div class='box1'>
<a class='btn btn-primary' data-toggle='collapse' href='#collapseExample$num' role='button' aria-expanded='false' aria-controls='collapseExample$num'>
Description  </a>
  <div class='collapse' id='collapseExample$num'>
  <div class='card card-body'>
 $row->des;
  </div>
</div>
</div>
<div class='box2'>
<a class='btn btn-primary' data-toggle='collapse' href='#collapseExample2$num' role='button' aria-expanded='false' aria-controls='collapseExample2$num'>
Rules 
</a>
<div class='collapse' id='collapseExample2$num'>
  <div class='card card-body'>
 $row->rules;
  </div>
</div>
</div>
<!----flex----->
</div>
<!-col------------>
</div>"; 
} 
}
else
echo"no data";
?>