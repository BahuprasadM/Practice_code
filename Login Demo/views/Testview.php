<html>
	<head>
		<title>LOGIN FORM DEMO</title>
	</head>
	<body>
	<?php
		echo validation_errors();
	echo form_open('test/loginCheck'); 
	?>
			<table>
				<tr>
					<th>USERNAME</th>
					<td>
						<input type="text" name="username" placeholder="USERNAME">
					</td>
					</tr>
					<tr>
						<th>PASSWORD</th>
						<td>
							<input type="password" name="password" placeholder="PASSWORD">
						</td>
					</tr>
					<tr>
						<td>
						</td>
						<td>
							<input type="button" value="CLEAR">
							<input type="submit" value="SUBMIT">
						</td>
					</tr>
				</tr>
			</table>
		</form>
	</body>
<html>
					
