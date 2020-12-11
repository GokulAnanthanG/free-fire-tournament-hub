<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8text">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>ADD TOURNAMENT</title>
    <link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="parallax.min.js"></script>
</head>

<body>
    <div class="col-md-12">
        <div class="paralex" data-parallax="scroll" data-image-src="ff2.png">
            <br><br><br><br>
            <h2 class="touranament" align="center">ADD TOURNAMENT</h2>
        </div>
    </div>
    <div class="col-md-12">
        <h2 class="plus" align="center">Add Tournament</h2>
<center>        <div class="a"><a href="tournament.php"><button class="btnA">View</button></a></div>
</center>
    </div>
    <div class="col-md-12">
        <div class="flexBox form">
            <div class="box1">
                <center>
                    <form id="frm" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="">Tournament Name</label><br>
                            <input type="text" name="touranamentName" id="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Tournament Type</label><br>
                            <select id="touranamentType" name="tt" id="">
                                <option value="--">--</option>
                                <option value="Friendly">Friendly</option>
                                <option value="prize">prize</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Entry Fee</label><br>
                            <input id="fee" type="number" value="0" name="entryFee" id="">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="">Time</label><br>
                            <input type="time" name="time" id="">
                        </div><br>
                        <div class="form-group">
                        <label for="">Date</label><br>
                        <input type="date" name="date" id="">
                    </div>
                </center>
            </div>
            <div class="box2">
                <center>
                <div class="form-group">
                        <label for="">Meridiam</label><br>
                        <select name="meridiam" id="">
                            <option value="pm">pm</option>
                            <option value="am">am</option>
                        </select>
                    </div><br>
                        <div class="form-group">
                            <label for="">Rules</label><br>
                            <input type="text" name="rules" id="">
                        </div>
                        <br>
                    <div class="form-group">
                        <label for="">Description</label><br>
                        <input type="text" name="des" id="">
                    </div><br>
                    <div class="form-group">
                        <label for="">Map Type</label><br>
                        <select name="mapType" id="">
                            <option value="per">permuda</option>
                            <option value="cs">CS</option>
                        </select>
                    </div>
                    <br>
                    <div class="form-group">
                            <label for="">Phone No</label><br>
                            <input id="pno" type="text" name="pno" id="pno">
                            <label class="errorPno" for="">Enter The valid Indian Number without pin</label>
                        </div>

                    
                    <div class="form-group">
                        <label class="error" for="">Fill All The Feild</label> <br>
                        <input class="btn" type="button" value="ADD" name="" id="">
                    </div>
                    </form>
                </center>
                
            </div>
        </div>
    </div>

</body>
<script>
    $(document).ready(function () {

       $(".a").fadeOut();
                      $("#touranamentType").change(function () {
            if ($("#touranamentType").val() == "Friendly") {
                $("#fee").css({
                    "cursor": "not-allowed",
                    "visibility": "hidden"
                })
            } else {
                $("#fee").css({
                    "cursor": "text",
                     "visibility": "visible"
                })
            }
        })

        $("#pno").keyup(function () {
            var patt = /^[7-9][0-9]{9}$/;
            patt.test($("#pno").val());
            if (patt.test($("#pno").val())) {
                $(".errorPno").css({
                    "visibility": "hidden"
                })
                $(".btn").css({
                    "visibility": "visible"
                });
                $(".error").css({
                    "visibility": "hidden"
                })
            } else {
                $(".errorPno").css({
                    "visibility": "visible"
                })
                $(".btn").css({
                    "visibility": "hidden"
                });
                $(".error").css({
                    "visibility": "visible"
                })
            }
        });
        $(".btn").click(function () {
            $.ajax({
                url: "addTour.php",
                type: "post",
                data: $("#frm").serialize(),
                success: function (data) {
                    alert(data)
                  
                    $("#status").html(data)
                    $("#frm")[0].reset();
                    $(".form").fadeOut();
                    $(".a").fadeIn();
                }
            })
           
           
            
        })
    })
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</html>