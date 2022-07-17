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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <fieldset>
        <legend>TODO app</legend>

        <form action="new_todo.php" method="post">
            <input type="text" name="todo_name" placeholder="Enter your todo">
            <button>New TODO</button>
        </form>

        <table>
            <?php foreach ($todos as $todoName => $todo): ?>
                    <tr>
                        <td>
                            <form action="change_status.php" method="post">
                                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                                <input type="checkbox"
                                    onChange="this.form.submit()"
                                    <?php echo $todo['completed'] ? 'checked' : '' ?>>
                            </form>
                            <?php echo $todoName ?>
                        </td>
                        <td>
                            <form action="delete.php" method="post">
                                <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                                <button>Delete</button>
                            </form>
                        </td>
                    </tr>
            <?php endforeach ?>
        </table>
    </fieldset>
</body>
</html>