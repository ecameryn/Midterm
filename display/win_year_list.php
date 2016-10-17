<?php include '../view/header.php' ?>

<div id="main">

<h1>Winners List</h1>


<?php foreach ($winners as $winner) : ?>



<table>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
	</tr>
	<tr>
		<td><?php echo $winner['FirstName']; ?></td>
        <td><?php echo $winner['LastName']; ?></td>
    </tr>
</table></center>

<?php endforeach; ?>
<p><a href="../index.php">Main Menu</a></p>

</div>
<?php include '../view/footer.php' ?>