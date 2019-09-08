<?php
include 'index.html';
if (isset($_POST['submit'])) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$title=$_POST['title'];
	$message=$_POST['message'];
	//$formcontent="\n \n From: " .$name"("$email")". "\n Title: " .$title."\n Message: ".$message.;
	echo"<pre><h1>Thank you ".$name." for your response!!<h1></pre>";
	//echo"\n Back to home page"
}






?>