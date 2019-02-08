<?php

require_once('php/mysqli_connect.php');

$query = "SELECT id, Name, available, placeHoldTimeIn, other FROM main";

$response = @mysqli_query($dbc, $query);


// db has 6 numbers, so each allocated to one
if($response){

	$listOfMachines = array();

	$row = mysqli_fetch_array($response, MYSQLI_NUM);
	while($row != null){
		// only 6 people in machine shop, not trying to make code efficent
		if ($row[3] == "true"){
			array_push($listOfMachines, $row[0]);
		}

		$row = mysqli_fetch_array($response,  MYSQLI_NUM);
	}


	foreach($listOfMachines as $item){

		if ($item < 3){
			echo '<div id="left_column">';
		}
		else{
			echo '<div id="right_column">';
		}

		echo '<p class="machine" id="$item">$item</p>.
			<input type ="button" value="Select" onclick="window.location.href=\'confirm.html\'/>';
	}

		echo "<div/>";

}
else{
	echo  "mySQL database cannot query data: <br/>" ;
	echo mysqli_error($dbc);

}

// Close connection to the database
mysqli_close($dbc);


?>



		
