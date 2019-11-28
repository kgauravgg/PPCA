<?php
if(isset($_GET['Message'])){
    echo $_GET['Message'];
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>PPCA/Leader Board</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/0f3ea8263c.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/leaderBoard.css">
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
          <a class="nav-link" href="playerProfiles.php">Players Profile</a>
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
      <h1>Matches Leader Board</h1>
      <img src="img/ppca.png" width="25%" height="auto">
      <h2>Pondicherry Para Cricket Association</h2>
      <h2>(PPCA)</h2>

    </div>
  </div>
</div>
<!--Leader Board-->
<?php
  require "connection.php";
    $sql="select * from tonament";
    $stmnt=$conn->prepare($sql);
    if($stmnt->execute()){
      $data=$stmnt->fetchAll();
      for($i=0; $i<count($data); $i++){
      echo "<div id=\"About\" class=\"about\">
  <div class=\"accordion\" id=\"accordionExample\">
    <div class=\"card\">
      <a class=\"btn btn-link mb-0\" type=\"button\" data-toggle=\"collapse\" data-target=#".$data[$i]["m_id"]." aria-expanded=\"true\" aria-controls=\"collapseOne\" style=\"text-decoration: none; color: white; background-color: #343a40;\" >
        <div id=".$data[$i]["m_id"]." class=\"container-fluid\">
          <div class=\"row\">
            <div class=\"col-4\"><h4 style=\"text-align: left;\">".$data[$i]["m_id"]."</h4></div>
            <div class=\"col-4\"><h4 style=\"text-align: center;\">PPCA vs ".$data[$i]["opponent"]."</h4></div>
            <div class=\"col-4\"><h4 style=\"text-align: right;\">".$data[$i]["win_lose"]."</h4></div>
          </div>
        </div>
      </a>

      <div id=".$data[$i]["m_id"]." class=\"collapse show\" aria-labelledby=\"headingOne\" data-parent=\"#accordionExample\">
        <div class=\"card-body\">
         <div><h3 style=\"text-align: center;\">Toss Winner: ".$data[$i]["toss_winner"]."</h3></div>
         <div class=\"container-fluid\">
          <div class=\"row\" style=\"text-align: center;\">
            <div class=\"col-6\"><h4>PPCA Scored: ".$data[$i]["score_team1"]."/".$data[$i]["wicket_team1"]." ".$data[$i]["ovesr_team1"]." Overs</h4></div>
            <div class=\"col-6\"><h4>".$data[$i]["opponent"]." Scored: ".$data[$i]["score_team2"]."/".$data[$i]["wicket_team2"]." ".$data[$i]["overs_team2"]." Overs</h4></div>
          </div>
         </div>
         <div><h4 style=\"text-align: center;\">Best Player of the Match: <strong>".$data[$i]["best_player"]."</strong></h4></div>
        </div>
        <div style=\"text-align: center\">
          <div class=\"btn-group\" role=\"group\" aria-label=\"Basic example\">
           
            <button class=\"btn btn-primary\" type=\"button\" data-toggle=\"collapse\" data-target=#".$data[$i]["m_id"]." aria-expanded=\"false\" aria-controls=\"multiCollapseExample1 multiCollapseExample2\">Open/Close Both</button>
          </div>
        </div>
          
          
        </p>
        <div class=\"row\">
          <div class=\"col\">
            <div class=\"collapse multi-collapse\" id=".$data[$i]["m_id"].">
              <div class=\"card card-body\" style=\"overflow-x:auto;\">
                <div style=\"text-align: center;\"><h5>1st Enning Batting by PPCA</h5></div>
                <table class=\"table table-borderless\" style=\"text-align: center;\">
                  <thead>
                    <tr>
                      <th scope=\"col\"></th>
                      <th scope=\"col\">Runs</th>
                      <th scope=\"col\">BWs</th>
                      <th scope=\"col\">6s</th>
                      <th scope=\"col\">4s</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope=\"row\">Player 1</th>
                      <td>54</td>
                      <td>86</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                  </tbody>
                </table>
                <div style=\"text-align: center;\"><h5>2nd Enning Bolling by PPCA</h5></div>
                <table class=\"table table-borderless\" style=\"text-align: center;\">
                  <thead>
                    <tr>
                      <th scope=\"col\"></th>
                      <th scope=\"col\">Runs</th>
                      <th scope=\"col\">Overs</th>
                      <th scope=\"col\">Ws</th>
                      <th scope=\"col\">Extra</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope=\"row\">Player 1</th>
                      <td>54</td>
                      <td>86</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class=\"col\">
            <div class=\"collapse multi-collapse\" id=#".$data[$i]["m_id"].">
              <div class=\"card card-body\" style=\"overflow-x:auto;\">
                <div style=\"text-align: center;\"><h5>1st Enning Batting by CPCA</h5></div>
                <table class=\"table table-borderless\" style=\"text-align: center;\">
                  <thead>
                    <tr>
                      <th scope=\"col\"></th>
                      <th scope=\"col\">Runs</th>
                      <th scope=\"col\">BWs</th>
                      <th scope=\"col\">6s</th>
                      <th scope=\"col\">4s</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope=\"row\">Player 1</th>
                      <td>54</td>
                      <td>86</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                  </tbody>
                </table>
                <div style=\"text-align: center;\"><h5>2nd Enning Bolling by CPCA</h5></div>
                <table class=\"table table-borderless\" style=\"text-align: center;\">
                  <thead>
                    <tr>
                      <th scope=\"col\"></th>
                      <th scope=\"col\">Runs</th>
                      <th scope=\"col\">Overs</th>
                      <th scope=\"col\">Ws</th>
                      <th scope=\"col\">Extra</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope=\"row\">Player 1</th>
                      <td>54</td>
                      <td>86</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
";
    }
  }
?>

<div id="About" class="about">
  <div class="accordion" id="accordionExample">
    <div class="card">
      <a class="btn btn-link mb-0" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="text-decoration: none; color: white; background-color: #343a40;" >
        <div id="headingOne" class="container-fluid">
          <div class="row">
            <div class="col-4"><h4 style="text-align: left;">12-Oct-2019</h4></div>
            <div class="col-4"><h4 style="text-align: center;">PPCA vs CPCA</h4></div>
            <div class="col-4"><h4 style="text-align: right;">Lose</h4></div>
          </div>
        </div>
      </a>

      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
        <div class="card-body">
         <div><h3 style="text-align: center;">Toss Winner: PPCA</h3></div>
         <div class="container-fluid">
          <div class="row" style="text-align: center;">
            <div class="col-6"><h4>PPCA Scored: 250/8 50 Overs</h4></div>
            <div class="col-6"><h4>CPCA Scored: 251/5 45.5 Overs</h4></div>
          </div>
         </div>
         <div><h4 style="text-align: center;">Best Player of the Match: <strong>Kumar Gaurav</strong></h4></div>
        </div>
        <div style="text-align: center">
          <div class="btn-group" role="group" aria-label="Basic example">
            <button class="btn btn-success" data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">PPCA Team</button>
            <button class="btn btn-danger" type="button" data-toggle="collapse" data-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">CPCA Team</button>
            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Open/Close Both</button>
          </div>
        </div>
          
          
        </p>
        <div class="row">
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample1">
              <div class="card card-body" style="overflow-x:auto;">
                <div style="text-align: center;"><h5>1st Enning Batting by PPCA</h5></div>
                <table class="table table-borderless" style="text-align: center;">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Runs</th>
                      <th scope="col">BWs</th>
                      <th scope="col">6s</th>
                      <th scope="col">4s</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Player 1</th>
                      <td>54</td>
                      <td>86</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                  </tbody>
                </table>
                <div style="text-align: center;"><h5>2nd Enning Bolling by PPCA</h5></div>
                <table class="table table-borderless" style="text-align: center;">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Runs</th>
                      <th scope="col">Overs</th>
                      <th scope="col">Ws</th>
                      <th scope="col">Extra</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Player 1</th>
                      <td>54</td>
                      <td>86</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="collapse multi-collapse" id="multiCollapseExample2">
              <div class="card card-body" style="overflow-x:auto;">
                <div style="text-align: center;"><h5>1st Enning Batting by CPCA</h5></div>
                <table class="table table-borderless" style="text-align: center;">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Runs</th>
                      <th scope="col">BWs</th>
                      <th scope="col">6s</th>
                      <th scope="col">4s</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Player 1</th>
                      <td>54</td>
                      <td>86</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                  </tbody>
                </table>
                <div style="text-align: center;"><h5>2nd Enning Bolling by CPCA</h5></div>
                <table class="table table-borderless" style="text-align: center;">
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Runs</th>
                      <th scope="col">Overs</th>
                      <th scope="col">Ws</th>
                      <th scope="col">Extra</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">Player 1</th>
                      <td>54</td>
                      <td>86</td>
                      <td>4</td>
                      <td>6</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!--Footer Section-->
<div id="Contacts" class="container-fluid  footer">
  <div class="footer-top">
    <div class="row">
       <div class="col-md-3 footer-section">
          <h4>Address</h4>
          <p>No.46, Kamban Street, Sivaranthagam, Puducherry, India - 605106</p>
       </div>
       <div class="social col-md-3 footer-section">
          <h4>Connect</h4>
              <ul>
                  <a target='_blank' href="https://www.google.com/maps/place/Pondicherry+University/@12.0219043,79.8570786,19.5z/data=!4m12!1m6!3m5!1s0x3a536176a1e57959:0xf9c2bcf93bd35eba!2sPondicherry+University!8m2!3d12.0219328!4d79.8574832!3m4!1s0x3a536176a1e57959:0xf9c2bcf93bd35eba!8m2!3d12.0219328!4d79.8574832"><li id="location"><i class="fas fa-street-view"></i></li></a>
                  <a target='_blank' href="https://www.facebook.com/K.Gaurav429025"><li id="facebook"><i class="fa fa-facebook"></i></li></a>
                  <a target='_blank' href="https://twitter.com/@gaurav429025"><li id="twitter"><i class="fa fa-twitter"></i></li></a>
                  <a target='_blank' href="https://www.instagram.com/kgauravg/"><li id="instagram"><i class="fa fa-instagram"></i></li></a>
                  <a target='_blank' href="https://www.youtube.com/channel/UC82aMPOv-rKVMI9SqefkRlw/"><li id="youtube"><i class="fa fa-youtube"></i></li></a>
              </ul>
       </div>
       <div class="col-md-3 footer-section">
          <h4>Contact</h4>
          <p>Mob: +91 9894783141, +91 8220029090<br>Email: ppca.puducherry19@gmail.com</p>
       </div>
       <div class="col-md-3 footer-section">
          <h4>Bank A/C Information</h4>
            <p>Bank Name: <br>A/C No: <br>IFSC Code: <br>Branch Name:</p>
       </div>
    </div>
  </div>
</div>
   
<div class="container-fluid footer2">
  <div class="row">
    <div class="col-sm-12">
      <p>Thank you for your visit. Hope to see you again. Developed by <a target='_blank' href="https://www.facebook.com/K.Gaurav429025"><strong><u>Kumar Gaurav</u></strong></a> and maintained by PPCA</p>
    </div>
  </div>
</div>
</body>
</html>