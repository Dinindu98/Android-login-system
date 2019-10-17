<?php
    if(isset($_POST["submit"])){
        $name = $_POST["stName"];
        $stId = $_POST["id"];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Details</title>
</head>
<body>
    <form action="#" method="POST">
        Subject: <br>
        <input type="text" name="subjectName" required><br>
        Marks: <br>
        <input type="text" name="marks" required><br>
        <input type="submit" name="addDetails">
    </form>
</body>
</html>

<?php 
    // $query
?>

<?php
if(isset($_POST["addDetails"])){
    $subject = $_POST["subjectName"];
    $marks = $_POST["marks"];

    echo $subject . " " . $marks;


    // $query = "INSERT INTO marks st_number,"
}
?>