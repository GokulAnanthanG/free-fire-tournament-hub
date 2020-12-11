<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8text">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>TOURNAMENT</title>
    <link rel="stylesheet" href="style4.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.min.js"></script>
 <body>
    <center><img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/en/5/53/Garena_Free_Fire_Logo.png" alt=""></center>
 <br><br><br>
 <center>
 <h2 align="center">Login</h2>
 <br><br><br>
 <div class="container">
 <div class="flex">
 <div class="box1"><h1 class="adminLog">Admin login</h1></div>
 <div class="box2"> 
 <form action="" method="post" id="frm">
 <div class="form-group">
 <label for="">Name</label>
 <input class="form-control" type="text" name="name" id="name">
 </div> 
 <div class="form-group">
 <label for="">Password</label>
 <input class="form-control" type="text" name="pass" id="pass">
 </div>
 <div class="form-group">
 <br>
 <button type="button" class="form-control btn">Login</button>
 </form>
 <br>
 <p></p>
  </div>
 </div>
 </div>
 </div>
 </center>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
 <script>
 $(document).ready(function(){
    $(".btn").click(function(){
 var name=$("#name").val();
 var pass=$("#pass").val();
if(name.length>1&&pass.length>1){
 $.ajax({
    url:'login.php',
    type:"POST",
    data:$("#frm").serialize(),
    success:function(d){
      $("p").html(d)
      if(d=="Loging In :)"){
   window.open("cPannel.php");
       }

     }
 })
 }
else{
$("p").html("Fill all the feild")
 }
     })
  })
 </script>
 </body>
