<?php include '../view/header.php'; 
?>
<div id="main">
	
	<div id="content">
		<h1>Add An Olympic Year</h1>
		<form action="index.php" method="post" id="addY">
			<input type="hidden" name="action" value="add_year" />
			
			<label>Olympic Year</label>
			<input type="text" name="year" />
			<br />
			
			<label>Location</label>
			<input type="text" name="location" />
			<br />
			
			<label>
				<input type="submit" value="Go" />
			</label>
		</form>
		<p><a href="../index.php">Main Menu</a></p>
	</div>

</div>

<?php include '../view/footer.php'; ?>