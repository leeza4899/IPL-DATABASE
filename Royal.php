<?php
include_once 'php_files/db.php';
$sql1="SELECT * FROM batsmen where Player_name =  'Virat Kohli';";
$sql2="SELECT * FROM batsmen where Player_name =  'AB deVillers
';";
$sql3="SELECT * FROM batsmen where Player_name =  'Moeen ali';";
$sql4="SELECT * FROM bowlers where Player_name =  'Yuzvendra Chahal
';";
$sql5="SELECT * FROM bowlers where Player_name =  'Umesh Yadav';";
$result1= mysqli_query($conn,$sql1);
$row1 = mysqli_fetch_assoc($result1);
$result2= mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$result3= mysqli_query($conn,$sql3);
$row3 = mysqli_fetch_assoc($result3);
$result4= mysqli_query($conn,$sql4);
$row4 = mysqli_fetch_assoc($result4);
$result5= mysqli_query($conn,$sql5);
$row5 = mysqli_fetch_assoc($result5);
?>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>DBMS</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Righteous&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Dosis|Josefin+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-back">
    <a class="navbar-brand logo" href="index.html"> IPL DataBase</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav ">
        <a class="nav-item nav-link" href="#">About</a>
        <a class="nav-item nav-link" href="#">Team</a>
      </div>
    </div>
  </nav>
  <div class="royal-container container">
    <div class="player-cards">
      <div class="player-img">
        <img src="players\RCB\KOHLI.png"></div>
        <div class="player-details">
           <h1 class="player_names"><?php
            echo $row1["Player_name"];
           echo ' ('.$row1["jersey_number"].')'?>
            <br>
            <?php echo $row1["Nationality"]?></h1>
            <h3>Matches:<?php echo " ".$row1["total_matches"]?>
            </h3><h3>Runs:
            <?php echo $row1["runs"]?>
            </h3>
            <h3>50's:
            <?php echo $row1["fifties"]?>
            </h3>

    </div>
    </div>
    <div class="player-cards">
      <div class="player-img">
        <img src="players\RCB\ABD.png"></div>
        <div class="player-details"><h1 class="player_names"><?php
         echo $row2["Player_name"];
        echo ' ('.$row2["jersey_number"].')'?>
         <br>
         <?php echo $row2["Nationality"]?></h1>
         <h3>Matches:<?php echo " ".$row2["total_matches"]?>
         </h3><h3>Runs:
         <?php echo $row2["runs"]?>
         </h3>
         <h3>50's:
         <?php echo $row2["fifties"]?>
         </h3>
    </div>
    </div>
    <div class="player-cards">
      <div class="player-img">
        <img src="players\RCB\MO.png"></div>
        <div class="player-details"><h1 class="player_names"><?php
         echo $row3["Player_name"];
        echo ' ('.$row3["jersey_number"].')'?>
         <br>
         <?php echo $row3["Nationality"]?></h1>
         <h3>Matches:<?php echo " ".$row3["total_matches"]?>
         </h3><h3>Runs:
         <?php echo $row3["runs"]?>
         </h3>
         <h3>50's:
         <?php echo $row3["fifties"]?>
         </h3>
    </div>
    </div>
    <div class="player-cards">
      <div class="player-img">
        <img src="players\RCB\yuzi.png"></div>
        <div class="player-details"><h1 class="player_names"><?php
         echo $row4["Player_name"];?> (03) <br>
       Indian </h1>

         <h3>Matches:<?php echo " ".$row4["matches_played"]?>
         </h3><h3>Runs:
         <?php echo $row4["economy"]?>
         </h3>
         <h3>4 Wickets:
         <?php echo $row4["four_wickets"]?>
         </h3>
    </div>
    </div>

    <div class="player-cards">
      <div class="player-img">
        <img src="players\RCB\umesh.png"></div>
        <div class="player-details"><h1 class="player_names"><?php
         echo $row5["Player_name"];?> (19) <br>
       Indian </h1>

         <h3>Matches:<?php echo " ".$row5["matches_played"]?>
         </h3><h3>Runs:
         <?php echo $row5["economy"]?>
         </h3>
         <h3>4 Wickets:
         <?php echo $row5["four_wickets"]?>
         </h3>
    </div>
    </div>
  </div>



    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="script.js" charset="utf-8"></script>
    </body>

    </html>
