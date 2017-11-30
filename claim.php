<?php     
	$pageTitle = "Claim";
    include_once "common/header.php";
	if(!empty($_POST['username'])){
		include_once "inc/class.users.inc.php";
        $users = new SiteUsers($db);
        echo $users->createAccount();
  }
?>
<div id="body">
	<h2> Fill in the form to make your claim</h2>
	<form method="post" action="claim.php" id="claimform">
		<label for="name">Name:</label><br/>
		<input type="text" name="name" id="" /><br/>
		
		<label for="lastName">Last name:</label><br/>
		<input type="text" name="lastName" id="lastName" /><br/>
		
		<label for="address">Address:</label><br/>
		<input type="text" name="address" id="address" /><br/>
		
		<label for="phoneNumber">Phone number:</label><br />
		<input type="text" name="phoneNumber" id="phoneNumber" /><br/>
		
		<label for="insComp">Insurance Company</label><br/>
		<select>
			<option value="icOne">Insurance Company 1</option>
			<option value="icTwo">Insurance Company 2</option>
			<option value="icThree">Insurance Company 3</option>
			<option value="icFour">Insurance Company 4</option>
		</select><br/>
		
		<label for="policNumber">Policy number:</label><br/>
		<input type="text" name="policyNumber" id="policyNumber" /><br/>
		
		<input type="submit" name="register" id="register" value="Submit" /></br>
	</form>
</div>
<?php
    include_once "common/footer.php";
?>