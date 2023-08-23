<!DOCTYPE html>
<html>
<head>
	<title>Shopping Application Form</title>
</head>
<body>
	<h2>Add Item</h2>
	<form method="post">
		<label for="itemID">Item ID:</label>
		<input type="text" name="itemID" id="itemID"><br><br>
		<label for="itemName">Item Name:</label>
		<input type="text" name="itemName" id="itemName"><br><br>
		<label for="itemQuantity">Item Quantity:</label>
		<input type="number" name="itemQuantity" id="itemQuantity"><br><br>
		<input type="submit" name="submit" value="Add Item">
	</form>
	
	<h2>Items</h2>
	<?php
		// Connect to database
		$conn = mysqli_connect("localhost", "username", "password", "shopping_app");
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		
		// Add item to database
		if (isset($_POST['submit'])) {
			$itemID = $_POST['itemID'];
			$itemName = $_POST['itemName'];
			$itemQuantity = $_POST['itemQuantity'];
			
			$sql = "INSERT INTO items (itemID, itemName, itemQuantity) VALUES ('$itemID', '$itemName', $itemQuantity)";
			
			if (mysqli_query($conn, $sql)) {
				echo "Item added successfully.";
			} else {
				echo "Error adding item: " . mysqli_error($conn);
			}
		}
		
		// Display items from database
		$sql = "SELECT * FROM items";
		$result = mysqli_query($conn, $sql);
		
		if (mysqli_num_rows($result) > 0) {
			echo "<table>";
			echo "<tr><th>Item ID</th><th>Item Name</th><th>Item Quantity</th></tr>";
			
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr><td>" . $row['itemID'] . "</td><td>" . $row['itemName'] . "</td><td>" . $row['itemQuantity'] . "</td></tr>";
			}
			
			echo "</table>";
		} else {
			echo "No items found.";
		}
		
		// Close connection
		mysqli_close($conn);
	?>
</body>
</html>
