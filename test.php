<?php
$myfile = fopen(dirname(__FILE__)."/LISTE-DES-DOMAINES-HABILITATION.csv", "r") or die("Unable to open file!");

$servername = "localhost";
$username = "ridd_info";
$password = "mnY0JxlzieUF8x3WfAlH";

// Create connection
$conn = new mysqli($servername, $username, $password,"ridd_info");

while(!feof($myfile)) {
  
  $words = preg_replace('/[0-9]+/', '',fgets($myfile));
  //echo  $words."<br>";
  
  $words = str_replace("'","\'", $words);
  
    if(trim($words)!=""){
  
	  $sql = "INSERT INTO activity_sector (activity_sector_name) VALUES ('".trim($words)."')";
	  
	  if ($conn->query($sql) === TRUE) {
	      echo "New record created successfully";
	  } else {
		  echo "Error: " . $sql . "<br>" . $conn->error;
	  }
	}
}
$conn->close();
