<?php     
	$pageTitle = "Homepage";
    include_once "common/header.php";
	
	if(!empty($_POST['username']) && !empty($_POST['password'])){
		include_once 'inc/class.users.inc.php';
        $users = new SiteUsers($db);
        if($users->accountLogin()===TRUE){
			echo "<meta http-equiv='refresh' content='0;/'>";
		}  
	}                 
?>
	<div id="body">
		<h2> Welcome, please log in.</h2>	
		<form method="post" action="index.php" id="loginform">
			<label for="username">Username:</label><br />
			<input type="text" name="username" id="username" /><br />
			<label for="password">Password:</label><br />
			<input type="password" name="password" id="password" /><br />
			<input type="submit" name="login" id="login" value="Login" class="button" /></br>
			<a href="signup.php" class="button">No account yet? Sign up!</a>
		</form>
	</div>
<?php
    include_once "common/footer.php";
?>