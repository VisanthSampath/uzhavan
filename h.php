<?php
session_start();
if(!isset($_SESSION["uname"]))
{
	header ("Location: index.php");
}
?>
<!doctype html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>uzhavan-home</title></head>
<style>
div.ss{
color:#AFEEEE;
padding:25px;
margin:50px;
}
div.welcome{
font-size:200%;
text-align:center;
}
div.location{
font-size:130%;
text-align:center;
color:palegreen;
}
div.footer{
font-size:130%;
text-align:center;
}
body{
	color:#DC143C;
}
div.option{
background-color:palegreen;
color:green;
text-align:center;
font-size:100%;
padding:10px;
}

</style>
<body bgcolor="orange">
<div class="container">
<div class="jumbotron">
<div class="welcome">
<a href="#">
<h2 style="color:brown;font-family:cursive"> GrowCrops</h2></a>
<?php echo "Welcome ",$_SESSION["uname"],"!";?>
<br><scope style="font-size:25px;color:	#808000">
<?php echo "Your location is " .$_SESSION["uplace"];?></br></scope>
<scope style="color:black;">Choose the required option<scope></br>
</br>
</div>
 <div class="footer">
<a href="v.html">
<div class="option">
Real time analysis</div>
</a></br>
<a href="blog.php">
<div class="option">
Blogs</div>
</a></br>
<a href="queries.php">
<div class="option">
Queries</div>
</a></br>
<a href="offline.html">
<div class="option">
Crop details</div>
</a></br>
<a href="profile.php">
<div class="option">
Profile</div>
</a></br>
<div class="footer">
<?php echo $_SESSION["uname"];?> - <a href="logout.php">Logout</a>
</div><div>
</div></body></html>