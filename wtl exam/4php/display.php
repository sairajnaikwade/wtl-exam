<?php

$servername="localhost";
$username="root";
$password="";
$dbname="student_detail";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed :" .$conn->connect_error);
}

$result=$conn->query("select * from student_detail");
$students = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1"> 
    <tr>
        <th>sr</th>
        <th>name</th>
        <th>prn</th>
        <th>phone no</th>
    </tr>

    <?php
    if(!empty($students)){
        foreach($students as $student){

            echo"<tr>
                    <td>{$student['sr']}</td>
                    <td>{$student['name']}</td>
                    <td>{$student['prn']}</td>
                    <td>{$student['phone_no']}</td>
                  </tr>";
        }
    }
    ?>
    </table>
</body>
</html>