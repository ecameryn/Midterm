<?php 

	function get_years()
	{
		global $db;
		$query = "SELECT * FROM olympiads
				  ORDER BY Year";
		$result = $db->query($query);
		return $result;
	}
	
	function get_winners_by_year($year_id)
	{
		global $db;
		$query = "SELECT * FROM winners
				  WHERE winners.YearID = '$year_id'
				  ORDER BY YearID";
		$result = $db->query($query);
		return $result;			   
	}
	
	function add_year_to_database($location, $year)
	{
		global $db;
		$query = "INSERT INTO olympiads
					(City, Year)
				  VALUES
					('$location', '$year')";
		$db->exec($query);
	}
?>