<?php

    if(!isset($_GET["id"])){
        return header("Location: search.php");
    }
    $id = $_GET["id"];

    echo $id;

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
<form action="_add.php" method="POST">
    Enter Student Number: <?php echo $id; ?> <br>
    <input type="text" name="id" value="<?php echo $id; ?>" readonly><br>
    Student Name: <br>
    <input type="text" name="stName" required>
    <input type="submit" name="search" value="Submit">
</form>
</body>
</html>