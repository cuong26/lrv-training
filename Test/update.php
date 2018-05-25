<?php
require 'connect.php';
 ?>
<?php
$db = $conn ->Dbstudent;
        //select collection
$coll = $db ->dbcollection;
$id = $_GET['id'];
$hoten = "";
$tuoi = "";
$lop = "";


//Lấy giá trị POST từ form vừa submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["ten"])) { $hoten = $_POST['ten']; }
 	if(isset($_POST["tuoi"])) { $tuoi = $_POST['tuoi']; }
    if(isset($_POST["lop"])) { $lop = $_POST['lop']; }


 
       
    $updatedResult = $coll->updateOne(
    ['_id' => new MongoDB\BSON\ObjectId($id)],
    ['$set' => [
            'name'    => $hoten,
            'tuoi'  => $tuoi,
            'lop' => $lop
        ],
    ]
);

}    
header("Location: mongoConnect.php");
?>
