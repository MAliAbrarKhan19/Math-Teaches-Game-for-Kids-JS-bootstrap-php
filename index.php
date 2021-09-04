<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=yes">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-utilities.min.css">
	<link rel="stylesheet" type="text/css" href="./bootstrap/css/bootstrap-reboot.min.css">


    <!-- Bootstrap CSS -->
    <link rel="icon" type="text/css" href="./img/game.svg" class="text-danger" >
    
  
	<title class="text-danger">Math Teaches</title>
</head>
<body class="container-fluid"
 style="
        background-repeat: all;
        background-size: cover;  
        background-image:url(./img/math-bg1.jpg);
      ">
  <!-- header -->
<!-- Body Starts -->

<div class="row" >
<div class="col-md-12" 
>
  


<!-- Row 1 -->
<div class="row">
  <div class="col-md-12">
    <div style=" background-color:rgba(255, 211, 51, 0.6);">
      <p class="display-4 text-danger" >
        <img src="./img/game.svg" align="center" width="120px" height="50px" style="text-shadow: black;"> Math Teaches
      </p>
    </div>    
  </div>
</div>
<!-- Row 1 -->


<!-- Row 2 -->


<div class="row">
  <div class="col-md-4">
    
    
  </div>

  <div class="bg-light offset-md-4 col-md-3">

    <p id="currenttime"></p>
    <h3 class="text-danger text-center" id="currenttime"></h3>
    
  </div>
  <div class="col-md-1"></div>
</div>
<!-- Row 2 -->

<!-- counttimer  JavaScript -->
<script type="text/javascript">
        
//             setTimeout(timecounter,3000);
//            function timecounter(){
//               var s="abrar";
//             document.getElementById("currenttime").innerHTML=s;}
               
        var setTime=16;//set time 15 sec
        //var setTime=10;//set time 10 sec

        setInterval(timecounter,1000);

       function timecounter(){

              if (setTime>0) {
              setTime=setTime-1;
              document.getElementById("currenttime").innerHTML="<h3 class='text-success' >"+"Time:"+setTime+"</h3>";
              }
              else{
              document.getElementById("currenttime").innerHTML="<h2 class='text-danger' >"+"Time's Up!!"+"</h2>";

              }
           }



</script>
<!-- counttimer  JavaScript -->






<!-- nameEntry Function JS  Starts-->

<script type="text/javascript">
  var playername;
    function nameEntry() {
         // Selecting the input element and get its value 
            var name = document.getElementById("name").value;
            
            // Displaying the value
        document.getElementById("playername").innerHTML="<h3 class='text-danger'>Lets play "+"</h3>"+"<h2 class='display-2 text-danger'>"+name+"</h2>";
        playername = name;

        //alert(name);


    }
</script>

<!-- NameEntry Function JS  Ends-->



<!-- Row 3 -->
<div class="row">
  <!-- Row 3 Col 1 -->
  <div class="offset-md-1 col-md-3 g-1">

    <div style=" background-color:rgba(245, 237, 201, 0.7);">
      <p class="text-danger" >
        <small class="text-muted">Welcome to the game. You will love playing it. Answer all quiz and become the winner.</small> 
      </p>

      <div id="playername">
        <h3 class="text-danger">Enter Your Name Here To Play</h3>

          <input type="text" name="name" id="name" placeholder="eg. Abrar Khan">
          <!-- Submit Button -->
          <input type="submit" onclick="nameEntry()" value="Start">
      </div>
    </div>

  </div>
  <!-- Row 3 Col 1 -->


  <!-- Row 3 Col 2 -->

  <div class="offset-md-1 col-md-6">
    <!-- Form Quiz section Starts -->
        
    <!-- Form Quiz section Ends -->
  </div>

</div>
<!-- Row 3 -->












</div>
</div>
<!-- Body Ends -->

<!-- Footer  -->
<!-- ================================================================================== -->

<div class="row text-end fixed-bottom">
  <div class="offset-md-1 col-md-10">
    <p class="text-success">&copy; Copyright 2021. All rights reserved by Abrar- <a href="+8801939123946">+8801939123946</a></p>
    
  </div>
</div>
<!-- Javascripts  -->
	<script type="text/javascript" src="./bootstrap/bootstrap.bundle.min.js"></script>
	<script type="text/javascript" src="./bootstrap/bootstrap.min.js"></script>
	<script type="text/javascript" src="./bootstrap/bootstrap.esm.min.js"></script>


<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    

</body>
</html>