<!DOCTYPE html>
<html>
<head>
	<title>PPCA Maintenance Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
.button {
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 18px;
  padding: 5px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.box{
	text-align: left;
	margin: 5% 50px;
    width: 50%;
  	box-shadow: 1px 1px 5px 2px #333;
  	padding: 15px;
}
</style>
<body>
<nav class="navbar  navbar-expand-lg fixed-top navbar-dark bg-dark">
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
    	<form class="form-inline my-2 my-lg-0">
      		<button class="button" type="submit"><span>	Logout </span></button>
   		</form>
  	</div>
</nav>
<div class="box"> 
	<form action="maintain_phpcode.php" method="POST" enctype="multipart/form-data">
		<label>Title of Notice :</label>
		<input type="text" name="title" placeholder="..................."><br>
		<label>Select PDF file related to Notice :</label>
		<input type="file" name="notice_file"><br>
		<label>Select ( jpg / jpeg / png ) Photo from Recent Achivement:</label>
		<input type="file" name="recent_achivement">

		<input type="submit" name="submit" value="Upload">
	</form>

</div>
</body>
</html>