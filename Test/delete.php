<?php
require 'connect.php';
$db = $conn ->Dbstudent;
$coll = $db ->dbcollection;
$id = $_GET['id'];
$result = $coll->deleteOne(['_id' => new MongoDB\BSON\ObjectId($id)]);
header("Location: mongoConnect.php")
?>
