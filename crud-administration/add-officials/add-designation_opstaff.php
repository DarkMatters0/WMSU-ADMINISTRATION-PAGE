<?php
require_once '../../classes/designation_opstaff.class.php';

if (isset($_POST['submit'])) {
    $designation = $_POST['designation'];

    $designationObj = new DesignationOpstaff();

    // Assuming `add_official()` accepts name and title as parameters
    if ($designationObj->add_designationOpstaff($designation)) {
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
    <title>Add new Designation</title>
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
    <div class="header">
    <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>

    <h1>DESIGNATION</h1>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" name="designation" id="designation" required>
            </div>



            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/administration" class="back-link">Back to Administration</a>
    </div>
</body>
</html>
