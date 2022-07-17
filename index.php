<?php

if (file_exists('todo.json')) {
    $json = file_get_contents('todo.json');
    $todos = json_decode($json, true);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html" />
    <title>TODO app</title>
</head>
<body>
    <form action="new_todo.php" method="post">
        <input type="text" name="todo_name" placeholder="Enter your todo">
        <button>New TODO</button>
    </form>

<?php foreach ($todos as $todoName => $todo): ?>
    <div style="margin-bottom: 5px;">
        <form style="display: inline-block" action="change_status.php" method="post">
            <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
            <input type="checkbox"
                   onChange="this.form.submit()"
                   <?php echo $todo['completed'] ? 'checked' : '' ?>>
        </form>
        <?php echo $todoName ?>
        <form style="display: inline-block" action="delete.php" method="post">
            <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
            <button>Delete</button>
        </form>
    </div>
<?php endforeach ?>

</body>
</html>