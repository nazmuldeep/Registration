<!DOCTYPE html>
<html>
<head>
<title> Registration Page </title>
</head>
<body>

<h1> My Registration Page </h1>

<fom>
<table>
<tr> <td>First Name: </td>
<td><input type="text" name='firstname' ></td></tr>
<br>
<tr> <td>Email: </td>
<td><input type="text" name='email' ></td></tr>
<br>
<tr> <td>User Name: </td>
<td><input type="text" name='user name' ></td></tr>
<br>
<tr> <td>Password: </td>
<td><input type="password" name='password' ></td></tr>
<br>
<tr> <td>Confirm Password: </td>
<td><input type="password" name='confirmpassword' ></td></tr>
<br>
<tr> <td>Gender:
<input type="radio" id="male" name="gender" value="male">
<label for="male">Male</label>
<input type="radio" id="female" name="gender" value="female">
<label for="female">Female</label>
<input type="radio" id="other" name="gender" value="other">
<label for="other">Other</label><br> </td> </tr>
<tr><td>
<label for="birthday">Date of Birth:</label>
<input type="date" id="dob" name="dob">
<br>

<input type="submit" value="Submit">
<input type="reset" value="Reset">

</tr></td>

</table>
</form>

</body>
</html>