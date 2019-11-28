
<!DOCTYPE html>
<html>
<head>
  <title>PPCA/Players Profiles</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="./slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="./js/index.js" type="text/javascript"></script>
    <script src="https://kit.fontawesome.com/0f3ea8263c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="./slick/slick.css">
    <link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="css/playerProfile.css">
  
</head>
<body>
<!--NavBar-->
<nav class="navbar  navbar-expand-lg fixed-top navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
      <img src="img/ppca.png" width="50" height="50" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav mr-auto">

          <div class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </div>
          <div class="nav-item">
            <a class="nav-link" href="leaderBoard.php">Leader Board</a>
          </div>
      </div>
      <form class="form-inline my-2 my-lg-0" action="login.php" method="POST">
          <input class="" type="text" name="username" placeholder="User Name">
          <input class="" type="password" name="password" placeholder="Password">
          <button class="button" type="submit"><span>Login </span></button>
      </form>
    </div>
</nav>
<!--Home-->
<div id="Home" class="cover">
  <div class="banner-wrapper">
    <div class="banner">
      <h1>Players Profiles</h1>
      <img src="img/ppca.png" width="25%" height="auto">
      <h2>Pondicherry Para Cricket Association</h2>
      <h2>(PPCA)</h2>

    </div>
  </div>
</div>
<!--Icons-->
<div class="icons">
  <?php
    require "connection.php";
    $sql="select * from players";
    $stmnt=$conn->prepare($sql);
    if($stmnt->execute()){
      $data=$stmnt->fetchAll();
      for($i=0; $i<=6; $i++){
          echo "<a data-toggle=\"modal\" data-target=#".$data[$i]["name"].">".$data[$i]["name"]."<img src='uploads/players/".$data[$i]["photo_name"]."' class=\"d-inline-block icon-item\" alt=".$data[$i]["sl_no"]."></a>";
      }
    }else {
          echo "There is Error";
      }
  ?>
  
</div><!--
<div class="right-icons">
  <?php/*
    require "connection.php";
    $sql="select * from players";
    $stmnt=$conn->prepare($sql);
    if($stmnt->execute()){
      $data=$stmnt->fetchAll();
      for($i=7;$i<=14;$i++){
        echo "<a data-toggle=\"modal\" data-target=#".$data[$i]["name"]."><img src='uploads/players/".$data[$i]["photo_name"]."' class=\"d-inline-block   right-icon-item\" alt=".$data[$i]["sl_no"].">".$data[$i]["name"]."</a>";
     }
   }else {
          echo "There is Error";
      }*/
 ?>

</div>-->

<?php
  require "connection.php";
  $sql = "select * from players";
  $stmnt = $conn->prepare($sql);
  if($stmnt->execute()){
    $data=$stmnt->fetchAll();
    for($i=0; $i<count($data); $i++){
      echo "<div id=".$data[$i]["name"]." class=\"modal fade bd-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog modal-lg modal-dialog-centered\">
      <div class=\"modal-content\">
        <div class=\"modal-header\" style=\"background-color: #343a40;\">
          <div class=\"modal-title\" id=\"exampleModalCenterTitle\">
            <div class=\"container-fluid\">
              <div class=\"row justify-content-md-center \">
                <div class=\"col col-lg-2\">
                  <p style=\"font-size: 16px; text-align: center; justify-content: center; margin: 0; color: white;\">".$data[$i]["sl_no"]."</p>
                </div>
                <div class=\"col-md-auto\">
                  <p style=\"font-size: 16px; text-align: center; justify-content: center; margin: 0; color: white;\">".$data[$i]["name"]."</p>
                </div>
                <div class=\"col col-lg-2\">
                  <img src=\"img/flag.jpg\" style=\"height: 30px; width: 50px; display: block; margin-left: auto; margin-right: auto;\">
                </div>
              </div> 
            </div>
          </div>
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
            <span aria-hidden=\"true\">&times;</span>
          </button>
        </div>
        <div class=\"modal-body\">
          <div class=\"container-fluid\">
            <div class=\"row justify-content-md-center\">
              <div class=\"col col-lg-4\">
                <img src='uploads/players/".$data[$i]["photo_name"]."' width=\"200px\" height=\"auto\">
              </div>
              <div class=\"col col-lg-8\">
                <table class=\"table table-striped\">
                  <tbody>
                    <tr><th scope=\"row\">Team Name</th><td>PPCA</td></tr>
                    <tr><th scope=\"row\">Role</th><td>".$data[$i]["role"]."</td> </tr>
                    <tr><th scope=\"row\">Height</th><td>".$data[$i]["height"]."cm</td></tr>
                    <tr><th scope=\"row\">Weight</th><td>".$data[$i]["weight"]." kg</td> </tr>
                    <tr> <th scope=\"row\">Age</th><td>".$data[$i]["age"]." Years</td></tr>
                    <tr><th scope=\"row\">Heigest Score</th><td>".$data[$i]["heigest_score"]."</td></tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <hr>
            <div style=\"background-color: #343a40; border-radius: 5px\">
              <h3 style=\"padding: 2px; text-align: center; color: white;\" >Career Total</h3>
            </div>
            <table class=\"table\" style=\"text-align: center; overflow-x:auto;\">
              <thead class=\"thead-dark\">
                <tr>
                  <th scope=\"col\">Matches</th><th scope=\"col\">Runs</th><th scope=\"col\">Wickets</th><th scope=\"col\">Catches</th><th scope=\"col\">6s</th><th scope=\"col\">4s</th> <th scope=\"col\">100s</th><th scope=\"col\">50s</th>
                </tr>
              </thead>
              <tbody class=\"thead-light\">
                <tr>
                  <td>".$data[$i]["total_matches"]."</td><td>".$data[$i]["total_runs"]."</td><td>".$data[$i]["wickets"]."</td><td>".$data[$i]["catches"]."</td><td>".$data[$i]["sixers"]."</td><td>".$data[$i]["boundrys"]."</td><td>".$data[$i]["hundreds"]."</td><td>".$data[$i]["fiftys"]."</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
";
    }
  }
?>



<!--Footer Section-->
   
<div class="container-fluid footer2">
  <div class="row">
    <div class="col-sm-12">
      <p>Thank you for your visit. Hope to see you again. Developed by <a target='_blank' href="https://www.facebook.com/K.Gaurav429025"><strong><u>Kumar Gaurav</u></strong></a> and maintained by PPCA</p>
    </div>
  </div>
</div>
</body>
</html>