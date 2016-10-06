<html>
<head>
</head>
<body>
<?php
		echo validation_errors();
	echo form_open('test/RecordInsert'); 
	?>
<fieldset span="20" >
<legend>Register</legend>
<table>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<td>
<label for='username' >UserName*:</label>
</td>
<td>
<input type='text' name='username' id='username' maxlength="50" />
</td>
<tr/>
<td>
<label for='email' >Email Address*:</label>
</td>
<td>
<input type='text' name='email' id='email' maxlength="50" />
</td>
<tr/>
<td>
<label for='password' >Password*:</label>
</td>
<td>
<input type='password' name='password' id='password' maxlength="50" />
</td>
<tr/>
</tr>
</table>
<input type='submit' name='Submit' value='Submit' />

</fieldset>
</form>
<body>
</html>