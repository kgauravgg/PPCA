<?php
	require 'connection.php';
	//echo "<pre>";
//print_r($_POST);
	if (isset($_POST['submit'])) {

		$sql1="insert into tonament (m_id,opponent,toss_winner,win_lose,score_team1, wicket_team1,over_team1,score_team2,wicket_team2,over_team2,best_player) values(?,?,?,?)";
			$stmnt1=$conn->prepare($sql1);
			$stmnt1->execute(array($_POST["date"], $_POST["opponent"], $_POST["toss_winner"], $_POST["win_lose"], $_POST["score_team1"], $_POST["wicket_team1"], $_POST["overs_team1"],$_POST["score_team2"], $_POST["wicket_team2"], $_POST["overs_team2"], $_POST["best_player"]));


		for($i=0;$i<count($_POST['player1_name']); $i++){
			$sql2="insert into ppca_batting (m_id, name, runs, bws, sixers, boundrys) values(?,?,?,?,?,?)";
			$stmnt2=$conn->prepare($sql2);
			$stmnt2->execute(array($_POST["date"][$i], $_POST["player1_name"][$i], $_POST["player1_run"][$i], $_POST["player1_boll"][$i], $_POST["player1_sixer"][$i], $_POST["player1_boundry"][$i] ));
		}
		
		for($i=0;$i<count($_POST['boller1_name']); $i++){
			$sql3="insert into ppca_bolling (m_id, name, runs, bws, ws, extras) values(?,?,?,?,?,?)";
			$stmnt3=$conn->prepare($sql3);
			$stmnt3->execute(array($_POST["date"][$i], $_POST["boller1_name"][$i], $_POST["boller1_run"][$i], $_POST["boller1_boll"][$i], $_POST["boller1_wicket"][$i], $_POST["boller1_extra"][$i]));
		}

		for($i=0;$i<count($_POST['player2_name']); $i++){
			$sql4="insert into team2_batting (m_id, name, runs, bws, sixers, boundrys) values(?,?,?,?,?,?)";
			$stmnt4=$conn->prepare($sql4);
			$stmnt4->execute(array($_POST["date"][$i], $_POST["player2_name"][$i], $_POST["player2_run"][$i], $_POST["player2_boll"][$i], $_POST["player2_sixer"][$i], $_POST["player2_boundry"][$i] ));
		}

		for($i=0;$i<count($_POST['player1_name']); $i++){
			$sql5="insert into team2_bolling (m_id, name, runs, bws, ws, extras) values(?,?,?,?,?,?)";
			$stmnt5=$conn->prepare($sql5);
			$stmnt5->execute(array($_POST["date"][$i], $_POST["boller2_name"][$i], $_POST["boller2_run"][$i], $_POST["boller2_boll"][$i], $_POST["boller2_wicket"][$i], $_POST["boller2_extra"][$i]));
		}
		echo "<script>alert('Your Data is successfully Updated');</script>";
		//header("Location:maintain.php");
	}
	
?>

