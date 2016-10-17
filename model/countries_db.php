<?php 

	function get_countries()
	{
		global $db;
		$query = "SELECT * FROM countries
				  ORDER BY Country";
		$result = $db->query($query);
		return $result;
	}
	
	function get_winners_by_country($country_id)
	{
		global $db;
		$query = "SELECT * FROM winners
				  WHERE winners.Country = '$country_id'
				  ORDER BY YearID";
		$result = $db->query($query);
		return $result;			   
	}
	
	function add_country_to_database($country_to_add)
	{
		global $db;
		$query = "INSERT INTO countries
					(Country)
				  VALUES
					('$country_to_add')";
		$db->exec($query);
	}
?>