
<html>
<h1>Lost</h1>
<h3>Please enter the details below of the item that you have lost:</h3>
<form action = "lost_item.php" method = "GET">
<label>Name of the Item</label>&nbsp;&nbsp;&nbsp;<input type = "text" name = "title"><br>
<label>Location</label><select name="location">
		<option value="Mens Hostel">Men's Hostel</option><br>
		<option value="SJT">SJT</option><br>
		<option value="TT">TT</option><br>
		<option value="MB">MB</option><br>
	<!--More options can be added here -->
	</select><br>	
	<label>Description</label>&nbsp;&nbsp;&nbsp;
<input type = "text" name ='description'>
<br>

	<label>Contact</label>&nbsp;&nbsp;&nbsp;
<input type = "text" name ='contact'>
<label>Date</label><input type ="date" name = "date_on"><br>
<label>Category</label><select name="category">
		<option value="Electronics">Electronics</option><br>
		<option value="I-CARD">I-CARD</option><br>
		<option value="Notebooks or Books">Notebooks or Books</option><br>
		<option value="Wallet">Wallet</option><br>
	<!--More options can be added here -->
	</select><br>
<label>Color</label><input type ="text" name = "color"><br>
	<input type = "submit" value="Add Record">	
</form>
</html>