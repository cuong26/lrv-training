<?php 
require 'connect.php';
//select database
$db = $conn->Dbstudent;
//select collection
$coll=$db->dbcollection;
$result = $coll->find([]);
foreach ($result as $row) {
  echo $row->tuoi ; //title
   
    // ...
}

?>