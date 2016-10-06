
<?php 
$result=$this->session->userdata('username');
echo "Hello"."     ".$result['username'];
?>
<html>
	<head>
	</head>
	<body>
	<?php
		echo validation_errors();
	echo form_open('test');
	?> 
	<h1>Login Success</h1>
		<input type="submit" value="Logout">
		</form>
	</body>
<html>
					

