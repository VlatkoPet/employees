<?php
include 'app.php';
include "../app/models/class.Technical.php";

// get database connection
include_once '../config/database.php';
include_once '../app/models/class.Employees.php';
  
$database = new Database();
$db = $database->getConnection();
  

// instantiate product object

/*$TechnicalTest is instance from class TechnicalTest()*/
$TechnicalTest= new TechnicalTest();
$data = json_decode($TechnicalTest->getData(),true);
$dataArray = array();
//var_dump($data["data"]);

foreach($data["data"] as $row){
	
	// $dataArray["records"][] = array("id"=>$row["id"], "date_of_birth"=>$row["date_of_birth"], "title"=>$row["title"], "image"=>$row["image"],
	// 								"first_name"=>$row["first_name"], "last_name"=>$row["last_name"], "email"=>$row["email"],
	// 								"address"=>$row["address"], "country"=>$row["country"], "bio"=>$row["bio"], "rating"=>$row["rating"] );



    // set product property values
	$employees = new Employees($db);
	$employees->employee_id = $row["id"];
    $employees->image = $row["image"];
    $employees->date_of_birth =$row["date_of_birth"];
	$employees->date_of_birth =$row["date_of_birth"];
    $employees->title = $row["title"];
    $employees->firstname = $row['first_name'];
	$employees->lastname = $row['last_name'];
	$employees->email = $row['email'];
	$employees->address = $row['address'];
	$employees->country = $row['country'];
	$employees->bio = $row['bio'];
	$employees->rating = $row['rating'];
    $employees->created_at = date('Y-m-d H:i:s');
	$employees->create();

}

echo "Employees updated!";

?>