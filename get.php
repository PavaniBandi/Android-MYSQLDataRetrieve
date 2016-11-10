<?php


$host='localhost';
    $user='root';
    $password='admin';
    
    
	
	$connection = mysqli_connect($host,$user,$password);
	
	if(!$connection){
		die('Connection Failed');
	}
	else{
		$dbconnect = mysqli_select_db($connection,'details');
		
		if(!$dbconnect){
			die('Could not connect to Database');
		}
		else{
            
            $query = "SELECT * from student ";
            
            if($resultset = mysqli_query( $connection,$query))
            {
			$records= array();
              
			while($r = mysqli_fetch_assoc($resultset)){
				$records[] = $r;
			}
                
                echo json_encode($records);
		}
	}
}
?>
