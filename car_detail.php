<?php


if($_POST['otherData']['type']=='addCarDetail')
{
	$data = $_POST;	
	parse_str($data['formData'], $data['formData']); //parse form's serialized data
	
	//your code is here with $data
	
	
	//then response
	
	#==General response--
	echo '<pre>'; print_r($data);
	exit;
	
		#==-OR-==#
	
	#==Response in json--
	/*echo json_encode($data);
	exit;*/

}


?>