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

    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  	<link rel="stylesheet" type="text/css" href="./slick/slick.css">
 	<link rel="stylesheet" type="text/css" href="./slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<style type="text/css">
	.scucess-story-box{
		margin: 5% 10% ;
	    width: 80%;
	  	box-shadow: 1px 1px 5px 2px #333;
	  	padding: 5px;
	}
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
        		<a class="nav-link" href="#Home">Home</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#About">About</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Notice">Notice</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Achivements">Achivements</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Players">Players</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Scucess_Story">Scucess Story</a>
      		</div>
      		<div class="nav-item">
        		<a class="nav-link" href="#Contacsts">Contacts</a>
      		</div>
    	</div>
    	<form class="form-inline my-2 my-lg-0" action="maintain.php" method="POST">
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
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
</div>

<!--Notice and Recent Achivements-->
<div id="Notice" class="about">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-4">
				<div class="recent-content">
					<h3 class="notice" align="center">Notification</h3>
					<marquee behavior="scrolling" direction="up" scrollamount="2" class="moving-body" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',2,0); this.start()">

						Inside here things will move <hr>
						Inside here things will move <hr>
						Inside here things will move <hr>
						Inside here things will move <hr>
						Inside here things will move <hr>
						Inside here things will move <hr>
						Inside here things will move <hr>
						Inside here things will move <hr>
					</marquee>
				</div>
			</div>
			<div id="Achivements" class="col-sm-8">
				<div class="recent-content">
					<h3 class="recent-achivment" align="center">Recent Achivement</h3>
					<marquee behavior="scrolling" direction="right" scrollamount="5" class="moving-image" onmouseover="this.setAttribute('scrollamount',0,0); this.stop()" onmouseout="this.setAttribute('scrollamount',5,0); this.start()">

						<img src="http://placehold.it/350x300?text=1">
						<img src="http://placehold.it/200x300?text=2">
						<img src="http://placehold.it/100x300?text=3">
						<img src="http://placehold.it/200x300?text=4">
						<img src="http://placehold.it/350x300?text=5">
					</marquee>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Players-->
<div id="Players">
	<section class="variable slider">
	    <div>
	    	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/index.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	      	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/avatar2.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	    	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/index.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	      	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/avatar2.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	     <div>
	    	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/index.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	      	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/avatar2.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	    	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/index.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	      	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/avatar2.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	     <div>
	    	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/index.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	      	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/avatar2.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	    	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/index.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
	    <div>
	      	<div class="flip-card">
			 	<div class="flip-card-inner">
			 		<div class="flip-card-front">
			 			<img src="img/avatar2.png" alt="Avatar" style="width:200px;height:200px;">
			    	</div>
				    <div class="flip-card-back">
				      	<h1>John Doe</h1>
				      	<p>Architect & Engineer</p>
				      	<p>We love that guy</p>
				    </div>
				</div>
			</div> 
	    </div>
  	</section>
</div>
<!--Video-->
<div class="vid-box">
	<div class="embed-responsive embed-responsive-16by9">
	  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/qP5-lOHhffI" allowfullscreen></iframe>
	</div>
</div>
<!--Scucess Story-->
<div class="scucess-story-box" id="Scucess_Story">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  	</ol>
	 	<div class="carousel-inner">
	    	<div class="carousel-item active">
		    	<div class="container">
					<div class="row success-item">
						<div class="col-sm-3">
							<img src="./img/index.png">
						</div>
						<div class="col-sm-9 story-text">
							<div class="story">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								<h5>Kumar Gaurav - 2017-18</h5>
							</div>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="carousel-item">
		    	<div class="container">
					<div class="row success-item">
						<div class="col-sm-3">
							<img src="./img/avatar2.png">
						</div>
						<div class="col-sm-9 story-text">
							<div class="story">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								<h5>Kumar Gaurav - 2017-18</h5>
							</div>
						</div>
					</div>
				</div>
	    	</div>
	    	<div class="carousel-item">
	      		<div class="container">
					<div class="row success-item">
						<div class="col-sm-3">
							<img src="./img/index.png">
						</div>
						<div class="col-sm-9 story-text">
							<div class="story">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
								<h5>Kumar Gaurav - 2017-18</h5>
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
<!--Footer Section-->
<div id="Contacts" class="container-fluid  footer">
	<div class="footer-top">
		<div class="row">
		   <div class="col-md-3 footer-section">
		      <h4>Address</h4>
		      <p>Ambedkar Chowk, Dehri on sone<br>Rohtas, Bihar 821307</p>
		      
		   </div>
		   <div class="social col-md-3 footer-section">
		      <h4>Connect</h4>
              <ul>
              	<a href="https://www.facebook.com/K.Gaurav429025"><li id="facebook"><i class="fa fa-facebook"></i></li></a>
              	<a href="https://twitter.com/@gaurav429025"><li id="twitter"><i class="fa fa-twitter"></i></li></a>
              	<a href="https://www.instagram.com/kgauravg/"><li id="instagram"><i class="fa fa-instagram"></i></li></a>
              	<a href="https://www.youtube.com/channel/UC82aMPOv-rKVMI9SqefkRlw/"><li id="youtube"><i class="fa fa-youtube"></i></li></a>
              </ul>
		   </div>
		   <div class="col-md-3 footer-section">
		      <h4>Contact</h4>
		      <p>Mob: 8409220816<br>Email: k.gauravsur@gmail.com</p>
		   </div>
		   <div class="col-md-3 footer-section">
		   		<h4>Bank A/C Information</h4>
		      	<p>Bank Name: <br>A/C No: 8409220816<br>IFSC Code: <br>Branch Name:</p>
		   </div>
		</div>
	</div>
</div>
	 
<div class="container-fluid footer2">
	<div class="row">
		<div class="col-sm-12">
			<p>Thank you for your visit. Hope to see you again. Developed by <a href="https://www.facebook.com/K.Gaurav429025"><strong><u>Kumar Gaurav</u></strong></a> and maintained by PPCA</p>
		</div>
	</div>
</div>
</body>
</html>