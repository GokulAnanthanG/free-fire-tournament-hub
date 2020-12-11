<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8text">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Goldman:wght@700&family=Modak&family=Nerko+One&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="parallax.min.js"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body>

 
<div class="col-md-12 topBanner">
    <div  class="paralex"  data-parallax="scroll" data-image-src="ff.jpg">
      <br><br>
        <h1 class="wel">Welcome</h1>
        <h2 class="to">TO</h2>
        <h3 class="th">Tournament Hub</h3>
        <br><br> 
        <b> <p class="slogan">You can get the avaliable tournaments and add your tournaments</p> </b>
    </div> 
</div> 
<div class="col-md-12">
    <br><br>
    <h2 class="touranament" align="center">TOURNAMENT</h2>
</div>
<!--button-->
<div class="col-md-12">
    <center>
    <div class="button">
       <a href="tournament.php"> <button class="btn1">Available</button></a>&nbsp; <a href="addTournament.php"><button class="btn2">Add</button></a>
    </div>
</center>
</div>
 <br><br>
<div class="col-md-12 well feedback">
    <h3 class="feed">feedback</h3>
    <form method="post" id="frm">
    <div class="flex">
         <div class="box1"><input placeholder="Email" type="text" name="email" id="email"></div>
        <div class="box2"><input type="text" placeholder="name" name="name" id="name"></div>
        <div class="box3"><input type="text" placeholder="Your tought" name="feedback" id="feedback"></div>
        <div class="box4"><button type="button" class="btn feedBtn">Submit</button></div>
    </div>
</form>
 </div>
<div id="footer" class="col-md-12">
    <br><br>
    <p class="footerText" align="center">Designed By  <b class="company">G(creation)</b>  </p>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
 $(".feedBtn").click(function(){
     var name=$("#name").val();
     var feedback=$("#feedback").val();
    var patt = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
            if (patt.test($("#email").val())&&name.length>2&&feedback.length>2) {
 $.ajax({
    url: "addFeedback.php",
                type: "post",
                data: $("#frm").serialize(),
                success: function (data) {
                    alert(data)
                     $("#frm")[0].reset();
                     alert(data);
                }
 })
            }
            else{
                alert("invalid");
            }
 })
 })
</script>
</body>
</html>