<!DOCTYPE html>
<html lang="en">
    <?php require 'connect.php';?>
    <?php 
        //select DB
        $db = $conn ->Dbstudent;
        //select collection
        $coll = $db ->dbcollection;
        //select id on url
        $id=$_GET['id'];
        //sellect db by id 
         $result = $coll->findOne(['_id' => new MongoDB\BSON\ObjectId($id)]);

        

    ?>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="Test.css">
</head>    
<body>
    <h1>Form Sửa Student</h1>
    <form method="post" action="/Test/update.php?id=<?php echo $result->_id  ?>">
        <ul class="form-style-1">
            <li>
                <label>Tên sinh viên</span></label>
                <input type="text" name="ten" class="field-divided"  value="<?php   echo $result->name ?>">
            </li>
            <li>
                <label>Tuổi </label>
                <input type="text" name="tuoi" class="field-long" value="<?php  echo $result->tuoi ?>">
            </li>
            <li>
                <label>Lớp </label>
                <input type="text" name="lop" value="<?php echo $result->lop  ?>">
            </li>
            <li>
                <input type="submit" value="Submit" />
            </li>
        </ul>

    </form>
</body>
</html>

    

    