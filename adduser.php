<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>
<body>

<h2>Add User</h2>

<form autocomplete="off" action="">

    <label for="name">Name</label>
    <input type="text" id="name" value=""> <br>

    <label for="">Email</label>
    <input type="text" id="email" value=""> <br>

    <label for="">Gender</label>
    <select name="" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
    </select> <br>

    <button type="button" onclick="submitData('insert');">Insert</button>
    <br>

    <a href="index.php">Go to index</a>

    <?php require 'script.php'; ?>

</form>
    
</body>
</html>