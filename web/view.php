<?php
    require('db.php');
?>

<?php
    if(isset($_POST["search"])){
        $stNum = $_POST["keyWord"];

        $query = "SELECT * FROM student WHERE st_number = '$stNum'";
        $results = mysqli_query($con, $query);

        $count = mysqli_num_rows($results);

        if($count <= 0){
            return header("Location: add.php?id=$stNum");
        }

        $query2 = "SELECT * FROM marks WHERE st_number='$stNum'";

        $results2 = mysqli_query($con, $query2);

        $subjects = array();
        $markss = array();

        while($row = mysqli_fetch_array($results2)){
            $subject = $row["subject_code"];
            
            
            $query3 = "SELECT * FROM subjects WHERE subject_code='$subject'";

            $results3 = mysqli_query($con, $query3);

            while($row2 = mysqli_fetch_array($results3)){
                $subject2 = $row2["description"];
                array_push($subjects, $subject2);
                $marks = $row["marks"];
                array_push($markss, $marks);

            }
        }
        for($i = 0; $i< sizeof($subjects); $i++){
            echo $subjects[$i]." ". $markss[$i] ."<br/>";
        }

    }

?>