<?php
$conn = new mysqli("localhost", "root", "", "todolist_php");

if ($conn->connect_error) {
    die("Connection failed " . $conn->connect_error);
}

if (isset($_POST["addtask"])) {
    $tas = $_POST["task"];
    $conn->query("INSERT INTO task_table (task) VALUES ('$tas')");
    header("Location: index.php");
}

if(isset($_GET["delete"])){
    $id = $_GET["delete"];
    $conn->query("DELETE FROM task_table WHERE id = '$id'");
    header("Location: index.php");
}

if(isset($_GET["complete"])){
    $id = $_GET["complete"];
    $conn->query("UPDATE task_table SET  status = 'completed' WHERE id = '$id'");
    header("Location: index.php");
}

$result = $conn->query("SELECT * FROM task_table ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-do List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Todo List</h1>
        <form action="index.php" method="post">
            <input type="text" name="task" placeholder="Enter new task" id="">
            <button type="submit" name="addtask">Submit</button>
        </form>

        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
            <li class="<?php echo $row["status"]; ?>">
                <?php echo $row["task"]; ?>
                <div class="actions">
                    <a href="index.php?complete=<?php echo $row['id']; ?>">Complete</a>
                    <a href="index.php?delete=<?php echo $row['id']; ?>">Delete</a>
                </div>
            </li>
            <?php endwhile ?>
        </ul>
    </div>
</body>

</html>