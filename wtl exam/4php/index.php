<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="student_detail";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection fail :" .$conn->connect_error);
}

    if(isset($_POST['name']) && isset($_POST['prn']) && isset($_POST['phone_no']) ){
        $name=$_POST['name'];
        $prn=$_POST['prn'];
        $phone_no=$_POST['phone_no'];
        $conn->query("insert into student_detail(name,prn,phone_no) values ('$name','$prn','$phone_no')");
        echo"Enter successfully";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .main{
            display:flex;
            justify-content:center;
        }
        .div1{
            background-color:red;
            padding-top:50px;
            padding-bottom:50px;
            padding-left:50px;
            padding-right:50px;
        }
    </style>
    <div class="main">
    <div class="div1">
    <form method=post action="">
        <input type="text" name="name" placeholder="Enter name" required><br><br>
        <input type="text" name="prn" placeholder="Enter prn" required><br><br>
        <input type="text" name="phone_no" placeholder="Enter phone-no" required><br><br>
        <button type="submit"> enter</button><br><br>
        <a href="display.php">display</a>
    </form>
    </div>
    </div>
</body>
</html>