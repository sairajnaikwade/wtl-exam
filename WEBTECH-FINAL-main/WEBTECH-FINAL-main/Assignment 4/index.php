<?php   
$connect = new mysqli("localhost", "root", "yourpassword", "school"); //new mysqli() :constructor for mysql class , handles db connections 

// Create
if(isset($_POST['add'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $connect->query("INSERT INTO students (name, email) VALUES ('$name','$email')");
}

// Delete
if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $connect->query("DELETE FROM students WHERE id=$id");
}

// Update
if(isset($_POST['update'])){
  $id = $_POST['id'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $connect->query("UPDATE students SET name='$name', email='$email' WHERE id=$id");
}

$result = $connect->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html>
<body>
<h2>Student List</h2>

<form method="post">
  <input type="hidden" name="id" value="">
  Name: <input type="text" name="name" required>
  Email: <input type="email" name="email" required>
  <button name="add">Add</button>
</form>

<table border="1" cellpadding="5">
<tr><th>ID</th><th>Name</th><th>Email</th><th>Action</th></tr>


<?php while($row = $result->fetch_assoc()): ?>
<tr>
  <form method="post">
    <td><?= $row['id'] ?></td>
    <td><input type="text" name="name" value="<?= $row['name'] ?>"></td>
    <td><input type="email" name="email" value="<?= $row['email'] ?>"></td>
    <td>
      <input type="hidden" name="id" value="<?= $row['id'] ?>">
      <button name="update">Update</button>
      <a href="?delete=<?= $row['id'] ?>">Delete</a>
    </td>
  </form>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
