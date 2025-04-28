<?php
require_once '../../classes/opstaff.class.php';
require_once '../../classes/honorifics.class.php';
require_once '../../classes/designation_opstaff.class.php';

$honorificsObj = new Honorifics();
$designationOpstaffObj = new DesignationOpstaff();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $designation_opstaff = $_POST['designation_opstaff'];
    $page_link = $_POST['page_link'];
    $honorifics_id = $_POST['honorifics']; // Get the selected honorifics ID

    $opstaffobj = new OpStaff();

    // Assuming `add_official()` accepts name and title as parameters
    if ($opstaffobj->add_official($name, $designation_opstaff, $page_link, $honorifics_id)) {
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
    <link rel="stylesheet" href="../../css/insert.css">
</head>
<body>
    <div class="header">
        <img src="../../images/WMSU-Logo.png" alt="WMSU Logo" class="logo">
        <div class="title">WMSU ADMIN</div>
    </div>
    <h1>OFFICE OF THE PRESIDENT STAFF</h1>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
    <label for="honorifics">Designation</label>
    <select name="honorifics" id="honorifics" required>
        <option value="">Select a designation</option>
        <?php
            $honorific = $honorificsObj->fetchHonorifics();
            foreach ($honorific as $honorifics){
        ?>
            <option value="<?= $honorifics['id'] ?>"><?= htmlspecialchars($honorifics['name']) ?></option>
        <?php
            }
        ?>
    </select>
</div>

<div class="form-group">
    <label for="designation_opstaff">Designation</label>
    <select name="designation_opstaff" id="designation_opstaff" required>
        <option value="">Select a designation</option>
        <?php
            $designation_opstaff = $designationOpstaffObj->fetchdesignationOpstaff();
            foreach ($designation_opstaff as $designation_opstaffs){
        ?>
            <option value="<?= $designation_opstaffs['id'] ?>"><?= htmlspecialchars($designation_opstaffs['designation']) ?></option>
        <?php
            }
        ?>
    </select>
</div>


            <div class="form-group">
                <label for="page_link">Page Link</label>
                <input type="text" name="page_link" id="page_link" required>
            </div>

            <button type="submit" name="submit" class="submit-btn">Submit</button>
        </form>
        <a href="../../sample-admin/administration" class="back-link">Back to Administration</a>
    </div>
</body>
</html>
