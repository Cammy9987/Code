<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>
<!--This makes it so the user can't go back as still logged in.-->

<html>
<head>

<title>LogIn</title>





<link rel="stylesheet" href="style.css">
   
		<!--the code bellow is used to display the message of the input validation-->
		 <?php
			if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
			echo '<ul class="err">';
			foreach($_SESSION['ERRMSG_ARR'] as $msg) {
				echo '<li>',$msg,'</li>'; 
				}
			echo '</ul>';
			unset($_SESSION['ERRMSG_ARR']);
			}
		?>
<div class="wrapper">
	<div class="container">
		<h1>Welcome</h1>
		
		<form class="loginform" action="login_exec.php" method="post">
			<input name="username" type="text" placeholder="Username"/>
			<input name="password" type="password" placeholder="Password"/>
			<input name="" type="submit" value="login" id="loginfbutton"/>
			
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>


</table>
</form>
<body>


</body>
</html>
