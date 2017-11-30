<?php     
	$pageTitle = "Homepage";
    include_once "common/header.php";
	
	if(!empty($_POST['username'])){
		include_once "inc/class.users.inc.php";
        $users = new SiteUsers($db);
        echo $users->createAccount();
  }  
	
?>
	<link rel="stylesheet" href="CSS/main.css" type="text/css">
	<div id="index">
		<label for="username">Username:</label><br />
		<input type="text" name="username" id="username" /><br />
		<label for="password">Password:</label><br />
		<input type="password" name="password" id="password" /><br />
		<input type="submit" name="register" id="register" value="Log In" /></br>
		<a href="/BixIns2/signup.php" class="button">No account yet? Sign up!</a>
	</div>
<?php
    include_once "common/footer.php";
?>