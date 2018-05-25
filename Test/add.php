<?php
use MongoDB\Client;

require_once "vendor/autoload.php";

// khoi tao class Client
$conn = new Client("mongodb://127.0.0.1:27017", [
    'username' => 'superAdmin',
    'password' => 'admin9x'
]);

$hoten = "";
$tuoi = "";
$lop = "";

//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["ten"])) { $hoten = $_POST['ten']; }
 	if(isset($_POST["tuoi"])) { $tuoi = $_POST['tuoi']; }
    if(isset($_POST["lop"])) { $lop = $_POST['lop']; }
   
	$db = $conn->Dbstudent;

	//selection collection
	$post = $db->dbcollection;

	//insert
	$insertResult = $post->insertOne([
	    'name'    => $hoten,
	    'tuoi'  => $tuoi,
	    'lop' => $lop
   
	]);
	if ($insertResult= false) {
		echo "that bai";
		
	}
	else {
		echo "thanh cong";
	}}
			

?>
