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
 <script src="https://cdnjs.com/libraries/Chart.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
 <style>
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
  <body>
 <nav class="navbar navbar-fixed-top">
 <h1 class="navbar-brand">C<span id="panel">pannel</span></h1> 
 </nav>
 <br> <br> <br><br>
   <!-- The sidebar -->
<div class="sidebar">
 <a   class="active" href="cPannel.php">Home</a>
  <a href="ViewTourAdmin.php">Tours</a>
  <a  href="viewPrizedToruAdmin.php">Prized</a>
  <a href="viewFriendlyTourAdmin.php">Friendly</a>
</div>

<!-- Page content -->
<div class="content">
<h3 class="tourChart">TOur Chart</h3>
<canvas id="myChart"></canvas>
  <script>
    var data=[];
  $(document).ready(function(){
   
setInterval(() => {
  $.ajax({
      url:"prized.php",
      type:"GET",
      success:function(d){
        if(d>1){
          var prize=d-10;
       }
        data.push(prize);
       }
    })
}, 1000);

    //friendly
    $.ajax({
      url:"friendlyC.php",
      type:"GET",
      success:function(d2){
        if(d2>1){
          var Friendly=d2-10;
       }
        data.push(Friendly);
       }
    })
   })
   var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'bar',

    // The data for our dataset
    data: {
        labels: ['Prized', 'Friendly', 'Promotions'],
        datasets: [{
            label: 'List Of Tours',
            backgroundColor: ['rgb(255, 99, 132)','#FFC311','teal'],
            borderColor: 'white',
            data:data
        }]
    },

    // Configuration options go here
    options: {}
});
  </script>
  
  ..

</div>
  </body>
