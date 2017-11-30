<?php
    $pageTitle = "Register";
    include_once "common/header.php";
		
	if(!empty($_POST['username'])){
		include_once "inc/class.users.inc.php";
        $users = new SiteUsers($db);
        echo $users->createAccount();
  }  
?>
 
<h2>Create an account</h2>
<form method="post" action="signup.php" id="registerform">
	<div>
		<p>Fill in your credentials</p>
		<label for="username">Username:</label><br />
		<input type="text" name="username" id="username" /><br />
		<label for="password">Password:</label><br />
		<input type="text" name="password" id="password" /><br />
		<input type="submit" name="register" id="register" value="Sign up" />
</div>
</form>

<?php
    include_once "common/footer.php";
?>