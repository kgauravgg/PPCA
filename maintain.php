<?php
    session_start();
    if(!isset($_SESSION['username'])){
        $Message = urlencode("<script>alert('User not logged in !');</script>");
        header("Location:index.php?Message=".$Message);
        die;

    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>PPCA Maintenance Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.js"></script>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <link rel="stylesheet" type="text/css" href="css/maintain.css">
</head>

<body>
<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
  	<a class="navbar-brand" href="#">
	    <img src="img/ppca.png" width="30" height="30" class="d-inline-block align-top" alt="">
	    Pondicherry PARA Cricket Association Maintenance Portal
	</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    	<span class="navbar-toggler-icon"></span>
  	</button>

  	<div class="collapse navbar-collapse" id="navbarSupportedContent">
    	<div class="navbar-nav mr-auto">
    	</div>
    	<form class="form-inline my-2 my-lg-0" action="logout.php">
      		<button class="button" type="submit"><span>	Logout </span></button>
   		</form>
  	</div>
</nav>

<div class="card" style="margin-top: 8%; box-shadow: 1px 1px 5px 2px #333;">
  <div class="card-body"> 
  <ul class="nav nav-tabs">
      <!--Form 1-->
    <li class="nav-item">
      <a class="nav-link active" href="#notice"
        role="tab" data-toggle="tab">Upload Notice</a>
    </li>
      <!--Form 2-->
    <li class="nav-item">
      <a class="nav-link" href="#achievement" role="tab"
        data-toggle="tab">Add Recent Achievement Photos</a>
    </li>
      <!--Form 3-->
    <li class="nav-item">
      <a class="nav-link" href="#players" role="tab"
        data-toggle="tab">Update Players Profile</a>
    </li>
    <!--Form 4-->
    <li class="nav-item">
      <a class="nav-link" href="#leaderBoard" role="tab"
        data-toggle="tab">Update Leader Board</a>
    </li>
  </ul>

  <div class="tab-content">
      <!--Form 1-->
    <div role="tabpanel" class="tab-pane fade show active" id="notice">
      <form action="notice.php" method="POST" enctype="multipart/form-data">
        <label>Title of Notice :</label>
        <input class="text-box" type="text" name="title" placeholder=""><br><br>
        <label>Select PDF file related to Notice :</label>
        <input type="file" name="notice_file">
        <button class="button" name="submit" type="submit"><span> Save </span></button>
      </form>
    </div>
      <!--Form 2-->
    <div role="tabpanel" class="tab-pane fade" id="achievement">
      <form action="achievement.php" method="POST" enctype="multipart/form-data">
        <label>Select ( jpg / jpeg / png ) Photo from Recent Achievement:</label>
		    <input type="file" name="achievement" id="uploadImage">
          <button class="button" name="submit" type="submit" id="upload"><span> Save </span></button>
      </form>
    </div>
      <!--Form 3-->
    <div role="tabpanel" class="tab-pane fade" id="players">

      <form action="players.php" method="POST" enctype="multipart/form-data">
        <input type="number" name="jersey" placeholder="Player's Jersey Number">
        <input type="text" name="name" placeholder="Player's Name">
        <input type="text" name="role" placeholder="Role">
        <input type="number" name="height" placeholder="Height in Centimeter">
        <input type="number" name="weight" placeholder="weight in kg">
        <input type="date" name="age" placeholder="Age in years">
        <input type="number" name="heigest_score" placeholder="Heigest Score"><br><br>

        <input type="number" name="total_matches" placeholder="No of Total Matches">
        <input type="number" name="total_runs" placeholder="Total Runs">
        <input type="number" name="wickets" placeholder="Wickets">
        <input type="number" name="catches" placeholder="Catches">
        <input type="number" name="sixers" placeholder="No of 6s">
        <input type="number" name="boundrys" placeholder="No of 4s">
        <input type="number" name="hundreds" placeholder="No of 100s">
        <input type="nummber" name="fiftys" placeholder="No of 50s">
        

        <label>Select Player's Photo (jpeg/png/jpg) :</label>
        <input type="file" name="photo">
        <button class="button" name="submit" type="submit" id=""><span> Save </span></button>
      </form>
    </div>
    <!--Form 4-->
    <div role="tabpanel" class="tab-pane fade" id="leaderBoard">
      <form action="board.php" method="POST">
        <input type="date" name="date" required>
        <input type="text" name="opponent" placeholder="Opponent Team Name" required>
        <input type="text" name="toss_winner" placeholder="Toss Winner Team" required><br>

        <input type="text" name="win_lose" placeholder="Win or Lose">
        <input type="number" name="score_team1" placeholder="PPCA Team Score">/
        <input type="number" name="wickets_team1" placeholder="PPCA Team Lost Wickets">
        <input type="number" name="overs_team1" placeholder="Overs"><br>

        <input type="number" name="score_team2" placeholder="Opponent Team Score">
        <input type="number" name="wicket_team2" placeholder="Opponent Team Lost Wickets">
        <input type="number" name="overs_team2" placeholder="Overs"><br>

        <input type="text" name="best_player" placeholder="Man of the Match Player Name" required><br><br>

        <label>Team 1 Batting Details</label>
        <div id="i_row">
          <input type="text" name="player1_name[]" placeholder="Player Name" required>
          <input type="number" name="player1_run[]" placeholder="Run" required>
          <input type="number" name="player1_boll[]" placeholder="Bolls" required>
          <input type="number" name="player1_sixer[]" placeholder="6s" required>
          <input type="number" name="player1_boundry[]" placeholder="4s" required>
        </div>
        <input type="button" name="add" id="ibutton" value="ADD More"><br>
        <script type="text/javascript">
          $(function(){
            $('#ibutton').click(function(){
              //$('#i_row').clone().attr('id','i_row_'+$(this).index()).insertAfter('#i_row');
              $('#i_row').append("<div id=\"row\"><input type=\"text\" name=\"player1_name[]\" placeholder=\"Player Name\" required><input type=\"number\" name=\"player1_run[]\" placeholder=\"Run\" required><input type=\"number\" name=\"player1_boll[]\" placeholder=\"Bolls\" required><input type=\"number\" name=\"player1_sixer[]\" placeholder=\"6s\" required><input type=\"number\" name=\"player1_boundry[]\" placeholder=\"4s\" required></div>");
            })
          })
        </script>
        <label>Team 1 Bowling Details</label>
        <div id="ii_row">
          <input type="text" name="boller1_name[]" placeholder="Boller Name" required>
          <input type="number" name="boller1_run[]" placeholder="Run" required>
          <input type="number" name="boller1_boll[]" placeholder="Bolls" required>
          <input type="number" name="boller1_wicket[]" placeholder="Wickets" required>
          <input type="number" name="boller1_extra[]" placeholder="Extra" required>
        </div>
        <input type="button" name="add" id="iibutton" value="ADD More"><br>
        <script type="text/javascript">
          $(function(){
            $('#iibutton').click(function(){
              //$('#ii_row').clone().attr('id','ii_row_'+$(this).index()).insertAfter('#ii_row');
              $('#ii_row').append("<div id=\"ii_row\"><input type=\"text\" name=\"boller1_name\" placeholder=\"Boller Name\" required><input type=\"number\" name=\"boller1_run\" placeholder=\"Run\" required><input type=\"number\" name=\"boller1_boll\" placeholder=\"Bolls\" required><input type=\"number\" name=\"boller1_wicket\" placeholder=\"Wickets\" required> <input type=\"number\" name=\"boller1_extra\" placeholder=\"Extra\" required></div>")
            })
          })
        </script>
        <label>Team 2 Batting Details</label>
        <div id="iii_row">
          <input type="text" name="player2_name[]" placeholder="Player Name" required>
          <input type="number" name="player2_run[]" placeholder="Run" required>
          <input type="number" name="player2_boll[]" placeholder="Bolls" required>
          <input type="number" name="player2_sixer[]" placeholder="6s" required>
          <input type="number" name="player2_boundry[]" placeholder="4s" required>
        </div>
        <input type="button" name="add" id="iiibutton" value="ADD More"><br>
        <script type="text/javascript">
          $(function(){
            $('#iiibutton').click(function(){
              //$('#iii_row').clone().attr('id','iii_row_'+$(this).index()).insertAfter('#iii_row');
              $('#iii_row').append("<div id=\"iii_row\"><input type=\"text\" name=\"player2_name\" placeholder=\"Player Name\" required><input type=\"number\" name=\"player2_run\" placeholder=\"Run\" required><input type=\"number\" name=\"player2_boll\" placeholder=\"Bolls\" required><input type=\"number\" name=\"player2_sixer\" placeholder=\"6s\" required><input type=\"number\" name=\"player2_boundry\" placeholder=\"4s\" required></div>")
            })
          })
        </script>
        <label>Team 2 Bowling Details</label>
        <div id="iv_row">
          <input type="text" name="boller2_name[]" placeholder="Boller Name" required>
          <input type="number" name="boller2_run[]" placeholder="Run" required>
          <input type="number" name="boller2_boll[]" placeholder="Bolls" required>
          <input type="number" name="boller2_wicket[]" placeholder="Wickets" required>
          <input type="number" name="boller2_extra[]" placeholder="Extra" required>
        </div>
        <input type="button" name="add" id="ivbutton" value="ADD More"><br>
        <script type="text/javascript">
          $(function(){
            $('#ivbutton').click(function(){
              //$('#iv_row').clone().attr('id','iv_row_'+$(this).index()).insertAfter('#iv_row');
              $('#iv_row').append("<div id=\"iv_row\"><input type=\"text\" name=\"boller2_name\" placeholder=\"Boller Name\" required><input type=\"number\" name=\"boller2_run\" placeholder=\"Run\" required><input type=\"number\" name=\"boller2_boll\" placeholder=\"Bolls\" required><input type=\"number\" name=\"boller2_wicket\" placeholder=\"Wickets\" required><input type=\"number\" name=\"boller2_extra\" placeholder=\"Extra\" required></div>")
            })
          })
        </script>
        
        <button class="button" name="submit" type="submit"><span> Save </span></button>
      </form>
    </div>

  </div>
</div>
</div>
</body>

</html>