<?php include '../view/header.php'; 
	  require('../model/database.php');
	  require('../model/olympiads_db.php');
?>
<div id="main">
	
	<?php $years = get_years() ?>
	
	<div id="content">
		<h1>List Winners By Olympic Year</h1>
		<form action="index.php" method="post" id="win_by_year">
			<input type="hidden" name="action" value="display_win_by_year" />
			
			<label>Choose a Year</label>
			<select name="year">
			<?php foreach ($years as $year) : ?>
				<option value="<?php echo $year['ID']; ?>">
					<?php echo $year['Year']; ?>
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