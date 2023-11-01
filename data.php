<?php
// Open the SQLite database
$db = new SQLite3('mydatabase.db');

// Query to select all records from the 'users' table
$query = "SELECT * FROM users";
$result = $db->query($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>User List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <h1>User List</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php
        while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['password'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
    <?php
    // Close the database connection
    $db->close();
    ?>
</body>

</html>