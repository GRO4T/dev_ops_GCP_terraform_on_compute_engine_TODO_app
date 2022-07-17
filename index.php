<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * PHP version 5
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   CategoryName
 * @package    PackageName
 * @author     Original Author <author@example.com>
 * @author     Another Author <another@example.com>
 * @copyright  1997-2005 The PHP Group
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    SVN: $Id$
 * @link       http://pear.php.net/package/PackageName
 * @see        NetOther, Net_Sample::Net_Sample()
 * @since      File available since Release 1.2.0
 * @deprecated File deprecated in Release 2.0.0
 */

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
            <?php foreach ($todos as $todoName => $todo) : ?>
                <tr>
                    <td>
                        <form action="change_status.php" method="post">
                            <input type="hidden" name="todo_name" value="<?php echo $todoName ?>">
                            <input type="checkbox" onChange="this.form.submit()" <?php echo $todo['completed'] ? 'checked' : '' ?>>
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