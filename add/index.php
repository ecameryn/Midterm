<?php 
require('../model/database.php');
require('../model/countries_db.php');
require('../model/olympiads_db.php');

if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'default';
}

if($action == 'default')
{
	include('add_country.php');
}
else if ($action == 'add_country')
{
	$country_to_add = $_POST['country_name'];
	add_country_to_database($country_to_add);
	
	include('add_country.php');
	
}
else if($action == 'add_year')
{
	$year = $_POST['year'];
	$location = $_POST['location'];
	
	add_year_to_database($location, $year);
	
	include('add_year.php');
}
?>