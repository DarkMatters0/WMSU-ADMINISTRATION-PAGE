<?php
require_once '../../classes/honorifics.class.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $short = $_POST['short'];

    $honorifics = new Honorifics();

    // Assuming `add_official()` accepts name and title as parameters
    if ($honorifics->add_honorifics($name, $short)) {
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
    <title>Add new Honorifics</title>
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
    <div class="header">
    <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>

    <div class="container">
        <div class="section-title">ADD OFFICIAL</div>
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="short">Aggreviate</label>
                <input type="text" name="short" id="short" required>
            </div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/administration" class="back-link">Back to Administration</a>
    </div>
</body>
</html>
