<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$message=$_POST['message'];
		


		$to='truongcongloi1998@gmail.com';
		$subject='Form Submission';
		$message="Name :".$name."\n"."email :".$email."\n"."Wrote the following :"."\n\n".$message;
		$headers="From: ".$email;

	}
?>