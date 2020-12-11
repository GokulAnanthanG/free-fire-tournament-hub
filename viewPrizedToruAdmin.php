<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8text">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>TOURNAMENT</title>
    <link rel="stylesheet" href="style3.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
   <style>
   .well{
            border-radius: 14px;
background: #f5f5f5;
box-shadow:  20px 20px 60px #d0d0d0, 
             -20px -20px 60px #ffffff;
             height:"500px"
}
.tourName{
    color: #FFC311;
    font-family: 'Bebas Neue', cursive;
}
.td{
    font-weight:900px;
    color:;
    font-family:sans-serif;
}
.detail{
    font-family: 'Bebas Neue', cursive;
font-weight:900;
}
.flex{
    display:flex;
}
.box1{
    flex:1;
}
.box2{
    flex:1;
}
.box3{
    flex:1;
}
.pno{
    font-family: 'Bebas Neue', cursive;
font-weight:900;
}
.no{
    font-family: 'Bebas Neue', cursive;

}
/*side nav styles */
/* The side navigation menu */
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #FFC311;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
 }

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
.navbar-brand{
  color:#FFC311;
}
#panel{
  font-family: 'Bebas Neue', cursive;
color:black;
}
.tourChart{
  font-family: 'Bebas Neue', cursive;
}

  </style>
  </head>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>                 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<nav class="navbar navbar-fixed-top">
 <h1 class="navbar-brand">C<span id="panel">pannel</span></h1> 
 </nav>
 <br> <br> <br><br>
   <!-- The sidebar -->
<div class="sidebar">
  <a  href="cPannel.php">Home</a>
  <a href="ViewTourAdmin.php">Tours</a>
  <a  class="active" href="viewPrizedTourAdmin.php">Prized</a>
  <a href="viewFriendlyTourAdmin.php">Friendly</a>
</div>

<!-- Page content -->
<div class="content">

<div class="container"> <div class="col-md-12 data"></div>
</div>

<form action="" id="frm">
<input id="inp" name="inp" type="hidden">
</form>
</div>
  </body>
  <script>
  $(document).ready(function(){


$(document).on('click','.del',function(){
  var del=$(this).attr('id');
  $("#inp").val(del)
  $.ajax({
    url:'delete.php',
    type:'Post',
    data:$("#frm").serialize(),
    success:function(d){
      location.reload();
alert(d)
    }
  })
  })

 $.ajax({
     url:"prizedTourAdmin.php",
     type:"GET",
     success:function(d){
         $(".data").html(d)
      }
 })


   })
  </script>