<?php
if(isset($_GET['Message'])){
    echo $_GET['Message'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>PPCA</title>
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
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style type="text/css">

	</style>
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
        		<a class="nav-link" href="#Home" style="color: yellow;">Home</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#About" style="color: yellow;">About</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Notice" style="color: yellow;">Notice</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Achievement" style="color: yellow;">Achievement</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="playerProfiles.php" style="color: yellow;">Players Profiles</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Success_Story" style="color: yellow;">Success Story</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Contacts" style="color: yellow;">Contacts</a>
      		</div>
          <div class="nav-item">
            <a class="nav-link" href="leaderBoard.php" style="color: yellow;">Leader Board</a>
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
			<img src="img/ppca.png" width="25%" height="auto">
			<h2>Pondicherry Para Cricket Association</h2>
			<h2>(PPCA)</h2>
		</div>
	</div>
</div>
<!--About-->
<div id="About" class="about">
	<h3>About</h3>
	<p>Cricket is more than just a game in India you have probably heard that a million times before, but every now and then, something so out of the ordinary happens to drive home the point just how far an Indian cricket fan’s love for the game. Puducherry PARA Cricket Association is a collection of Young Inspired Differently Abled Cricketers, The team want to play as national team in future. Team had to face a lot of struggle in life, but never gave up.</p>
</div>

<!--Notice and Recent Achievements-->
<div id="Notice" class="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="recent-content">
					<h3 class="notice" align="center">Notification</h3>
					<marquee behavior="scrolling" direction="up" scrollamount="2" class="moving-body" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',2,0); this.start()">
                        <?php
                        require "connection.php";
                        $sql="select * from notice ";
                        $stmnt=$conn->prepare($sql);
                        if($stmnt->execute()) {
                            $data=$stmnt->fetchAll(PDO::FETCH_ASSOC);
                            //print_r($data);
                            for($i=0;$i<count($data);$i++) {
                                echo "<a target='_blank' href='uploads/notice/".$data[$i]["file_name"]."'>(".$data[$i]["upload_date"].") ".$data[$i]["title"]."</a>";
                                echo "<br><hr>";

                            }
                        }
                        else {
                            echo "There is Error";
                        }
                        ?>
					</marquee>
				</div>
			</div>
			<div id="Achievement" class="col-sm-8">
				<div class="recent-content">
					<h3 class="recent-achievement" align="center">Recent Achievement</h3>
					<marquee behavior="scrolling" direction="right" scrollamount="5" class="moving-image" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',5,0); this.start()">
                        <?php
                        require "connection.php";
                        $sql="select * from achivement";
                        $stmnt=$conn->prepare($sql);
                        if($stmnt->execute()) {
                            $data=$stmnt->fetchAll();
                            for($i=0;$i<count($data);$i++) {
                                echo "<img src='uploads/achievements/".$data[$i]["file_name"]."' style='max-height:300px;'>";
                            }
                        }
                        else {
                            echo "There is Error";
                        }
                        ?>
					</marquee>
				</div>
			</div>
		</div>
	</div>
</div>

<!--Video-->
<div class="vid-box">
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qP5-lOHhffI" allowfullscreen></iframe>
	</div>
</div>
<!--Success Story-->
<div class="success-story-box" id="Success_Story">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	  	</ol>
	 	<div class="carousel-inner">
	    	<div class="carousel-item active">
	      		<div class="container">
					<div class="row success-item">
						<div class="col-sm-3">
							<img src="player's img/kaniamudh.jpeg">
						</div>
						<div class="col-sm-9 story-text">
							<div class="story">
                                <p>Playing heigh level cricket as a youngester, and playing for my country is like living a dream and never wants wake up with</p>
								<h5>Kani Amudhu Vasanth</h5>
							</div>
						</div>
					</div>
				</div>
	    	</div>
		</div>
	  	<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  	<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</a>
	</div>
</div>
<!--Sponsors--
<marquee behavior="scrolling" direction="right" scrollamount="7" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',5,0); this.start()">
    <div class="card">
        <div class="container">
            <div class="row">
                <div class="col-5" >
                    <img src="img/ppca.png" alt="Avatar" style="padding: 3px; width: 50px; height: 50px;">
                </div>
                <div class="col-7" style="padding: 15px; alignment: center;">
                    <p><b>PPCA</b></p>
                </div>
            </div>
        </div>
    </div>
</marquee>-->
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