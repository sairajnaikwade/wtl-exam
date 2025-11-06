<?php
$connect = new mysqli("localhost","root","yourpass","school");

//add
if(isset($_POST['add'])){
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $connect->query("insert into students(name,value) values('$name','$email')");
}

//delete
if(isset($_GET['delete'])){
    $id = $_GET['delete']; 
    $connect->query("delete from students where id = '$id'");
}

//add
if(isset($_POST['update'])){
    $id = $_POST['id']; 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $connect->query("update student set name='$name' , email='$email' where id='$id'");
}

//storing the result into th4e result variable 
$result = $connect->query("select * from students");
?>

<!doctype html>
<html>
    <head>

</head>
<body>

<h2>Student Information</h2>

<form method="post">
<input type="hidden" name="id" value="">
Name : <input type="text" name="name" placeholder="Enter your name" required>
Email :<input type="text" name="email" placeholder="Enter your Email" required>
<button name="add">Add</button>
</form>

<table border=1>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>


    <?php while($row=$result->fetch_assoc()): ?>
    <tr>
        <form method=post>
        <td> <?= $row['id'] ?> </td>
        <td> <input type="text" name="name" value="<?= $row['name'] ?>"> </td>
        <td> <input type="text" name="email" value="<?= $row['email'] ?>"> </td>
        <td>
            <button name="update">update</button>
            <a href="?delete=<?= $row['id'] ?>">Delete</a>
        </td>
        </form>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>