<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>

    <h2>Index</h2>

    <table>
        <tr>
            <td>#</td>
            <td>Name</td>
            <td>Email</td>
            <td>Gender</td>
            <td>Action</td>
        </tr>

        <?php
        require 'config.php';
        $rows = mysqli_query($conn, "SELECT * FROM users");
        $i = 1;
        ?>

        <?php foreach ($rows as $row) : ?>

            <tr id=<?php echo  $row["id"] ?>>
                <td><?php echo $i++;  ?></td>
                <td><?php echo $row["name"];  ?></td>
                <td><?php echo $row["email"];  ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td>
                    <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <button type="button" onclick="submitData(<?php echo $row['id'] ?>)">Delete</button>
                </td>
            </tr>

        <?php endforeach; ?>

    </table>

    <br>

    <a href="adduser.php">Add User</a>

    <?php require 'script.php'; ?>

</body>

</html>