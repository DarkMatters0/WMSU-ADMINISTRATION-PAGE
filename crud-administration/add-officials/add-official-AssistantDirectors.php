<?php
require_once '../../classes/AssistantDirectors.class.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $title = $_POST['title'];

    $coordinator = new AssistantDirectors();

    // Assuming `add_official()` accepts name and title as parameters
    if ($coordinator->add_official($name, $title)) {
        echo "Official added successfully!";
        header('Location: ../../sample-admin/administration');
    } else {
        echo "Failed to insert into the database.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Officials</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>

        <label for="title">Title</label>
        <input type="text" name="title" id="title" required>

        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>
