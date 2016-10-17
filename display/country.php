<?php include '../view/header.php'; 
	  require('../model/database.php');
	  require('../model/countries_db.php');
?>
<div id="main">
	
	<?php $countries = get_countries() ?>
	
	<div id="content">
		<h1>List Winners By Country</h1>
		<form action="index.php" method="post" id="win_by_country">
			<input type="hidden" name="action" value="display_win_by_country" />
			
			<label>Choose a Country</label>
			<select name="country">
			<?php foreach ($countries as $country) : ?>
				<option value="<?php echo $country['ID']; ?>">
					<?php echo $country['Country']; ?>
				</option>	
			<?php endforeach; ?>
			</select>
			
			<label>
				<input type="submit" value="Go" />
			</label>
		</form>
		<p><a href="../index.php">Main Menu</a></p>
	</div>

</div>

<?php include '../view/footer.php'; ?>