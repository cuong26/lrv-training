<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="Test.css">
    </head>    
    <body>
        <h1>Form Thêm Student</h1>
        <form method="post" action="add.php">
            <ul class="form-style-1">
                <li>
                    <label>Tên sinh viên</span></label>
                    <input type="text" name="ten" class="field-divided" />
                </li>
                <li>
                    <label>Tuổi </label>
                    <input type="text" name="tuoi" class="field-long" />
                </li>
                <li>
                    <label>Lớp </label>
                    <input type="text" name="lop">
                </li>
                <li>
                    <input type="submit" value="Submit" />
                </li>
            </ul>
        </form>
    </body>
</html>
