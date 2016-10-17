<?php include '../view/header.php'; 
?>
<div id="main">
	
	<div id="content">
		<h1>Add A Country</h1>
		<form action="index.php" method="post" id="addC">
			<input type="hidden" name="action" value="add_country" />
			
			<label>Country Name</label>
			<input type="text" name="country_name" />
			<br />
			
			<label>
				<input type="submit" value="Go" />
			</label>
		</form>
		<p><a href="../index.php">Main Menu</a></p>
	</div>

</div>

<?php include '../view/footer.php'; ?>