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
	include('country.php');
}
else if ($action == 'display_win_by_country')
{
	$country_id = $_POST['country'];
	$winners = get_winners_by_country($country_id);
	
	include('win_country_list.php');
	
}
else if($action == 'display_win_by_year')
{
	$year_id = $_POST['year'];
	$winners = get_winners_by_year($year_id);
	
	include('win_year_list.php');
}
?>