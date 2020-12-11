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
    <script src="parallax.min.js"></script>
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
    </style>
</head>
</head>
<body>
    <div class="col-md-12">
        <div class="paralex" data-parallax="scroll" data-image-src="ff3.jpg">
            <br><br><br><br><br>
            <h2 class="touranament" align="center">TOURNAMENT</h2>
            </div>
    </div>
     <div class="col-md-12">
         <h3 class="filter">Filter</h3>
         <div class="select">
            <select class="form-control" class="select" name="" id="filter">
            <option value="All">All</option>
            <option value="prized">Prized</option>  
                <option value="Friendly">Friendly</option>
            </select>
         </div><br>
    </div> 
    <br><br>
  <div class="col-md-12 container"><br>
      <h1>hi</h1>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</body>
<script>
    $(document).ready(function(){
 $(".container").load("tour.php")
 
$("#filter").change(function(){
  if($("#filter").val()=="Friendly"){
    $(".container").load("friendly.php")
  }
 else if($("#filter").val()=="prized"){
    $(".container").load("prize.php")
 }
 else if($("#filter").val()=="All"){
    $(".container").load("tour.php")
 }
 })

     })
</script>
</html>