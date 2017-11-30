<?php     
	$pageTitle = "Claim";
    include_once "common/header.php";
?>
		<label for="name">Name:</label><br/>
		<input type="text" name="name" id="" /><br/>
		<label for="password">Last name:</label><br/>
		<input type="text" name="lastName" id="lastName" /><br/>
		<label for="name">Address:</label><br/>
		<input type="text" name="address" id="address" /><br/>
		<label for="password">Phone number:</label><br />
		<input type="text" name="phoneNumber" id="phoneNumber" /><br/>
		<label for="name">Insurance Company</label><br/>
		<select>
			<option value="icOne">Insurance Company 1</option>
			<option value="icTwo">Insurance Company 2</option>
			<option value="icThree">Insurance Company 3</option>
			<option value="icFour">Insurance Company 4</option>
		</select><br/>
		<label for="name">Policy number:</label><br/>
		<input type="text" name="policyNumber" id="policyNumber" /><br/>
		
		<input type="submit" name="register" id="register" value="Submit" /></br>
<?php
    include_once "common/footer.php";
?>