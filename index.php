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

    <!-- <p id="currenttime"></p> -->
    
  </div>
  <div class="col-md-1"></div>
</div>
<!-- Row 2 -->








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
      
      <!--Quiz- Row 3 Col 2 Row 1  -->
      <div class="row gx-6">
        <!-- Score -->
        <div class="col-md-3">
          <div class="badge rounded-pill " style="background-color: rgba(250, 14, 5, 0.8);">
            <p class="h3 text-light" id="score">Score 00</p>
          </div>
        </div>
        <!-- Questions Answered -->
        <div class="col-md-3">
          <div class="badge rounded-pill " style="background-color: rgba(35, 91, 247, 0.8);">
            <p class="h3 text-light" id="quesno">Question 00</p>
          </div>
        </div>
        <!-- Time -->
        <div class="offset-md-1 col-md-3">
          <div class="badge rounded-pill " style="background-color: rgba(250, 14, 5, 0.8);">
            <p class="h3 text-light" id="currenttime">Timer</p>
          </div>
        </div>

      </div>
      <!--Quiz- Row 3 Col 2 Row 1  -->


      

    <!-- Form Quiz section Ends -->
  </div>

</div>
<!-- Row 3 -->

<!--Quiz- Row 4 Col 1  -->
      <div class="row" id="quizbox">

        <script type="text/javascript">
          function quizbox() {
            //print quiz box
            document.getElementById("quizbox").innerHTML=
            "<div class='offset-md-6 col-md-5'>"+
              "<div class='row border border-5 border-primary rounded' style='background-color:rgba(220, 228, 252, 0.3);'>"+
                  "<b class='col display-3' id='numOne' >0</b>"+
                  "<b class='col display-3'>+</b>"+
                  "<b class='col display-3' id='numTwo'>3</b>"+
                  "<b class='col display-3'>=</b>"+
                  "<input class='col form-control display-3' type='text' name='ans' id='ans' placeholder='5'>"+
                  "<input class='col form-control display-3' type='submit' value='ans' onclick='' >"+

              "</div>"+
            "</div>"
          }
        </script>
          
       
      </div>
<!--Quiz- Row 4 Col 1 -->



<!-- nameEntry Function JS  Starts-->

<script type="text/javascript">
  var playername;
    function nameEntry() {
         // Selecting the input element and get its value 
            var name = document.getElementById("name").value;
            
            // Displaying the value
        document.getElementById("playername").innerHTML="<h3 class='text-danger'>Lets play "+"</h3>"+"<h2 class='display-2 text-danger'>"+name+"</h2>";
        playername = name;
        startgame();
        quizbox();
        //alert(name);


    }
</script>

<!-- NameEntry Function JS  Ends-->


<!-- JavaScript -->
<script type="text/javascript">
  //VAriables
        var setTime=16;//set time 15 sec per 
        //var setTime=10;//set time 10 sec
        var score=0;
        var quesno=0;



  //QUIZ JS FUnction
       function startgame(){
        setInterval(timecounter,1000);
        }


            //     setTimeout(timecounter,3000);
            //     function timecounter(){
            //     var s="abrar";
            //     document.getElementById("currenttime").innerHTML=s;}
               
  //Time Counter JS Function   
       function timecounter(){

              if (setTime>0) {
              setTime=setTime-1;
              document.getElementById("currenttime").innerHTML="<h3 class='text-light' >"+"Time:"+setTime+"</h3>";
              }
              else{
              document.getElementById("currenttime").innerHTML="<h2 class='text-' >"+"Time's Up!!"+"</h2>";

              }
           }



    //Quiz Program
    function quiz(){
      var a=2;
      var b=3;
      var c=a+b;
      //print a
      document.getElementById("currenttime").innerHTML=a
      //print b
      //print c

    }


</script>
<!--  JavaScript -->









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
