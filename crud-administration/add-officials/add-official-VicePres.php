<?php
require_once '../../classes/Vicepres.class.php';
require_once '../../classes/honorifics.class.php';
require_once '../../classes/designation_vp.class.php';

$honorificsObj = new Honorifics();
$designation_vpObj = new DesignationVp();

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $designation_vp = $_POST['designation_vp'];
    $page_link = $_POST['page_link'];
    $honorifics_id = $_POST['honorifics']; // Get the selected honorifics ID

    $vicepresobj = new VicePres();

    // Assuming `add_official()` accepts name and title as parameters
    if ($vicepresobj->add_official($name, $designation_vp, $page_link, $honorifics_id)) {
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
    <h1>VICE PRESIDENT</h1>

    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
    <label for="honorifics">Honorifics</label>
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
    <label for="designation_vp">Designation</label>
    <select name="designation_vp" id="designation_vp" required>
        <option value="">Select a designation</option>
        <?php
            $designation = $designation_vpObj->fetchdesignation_vp();
            foreach ($designation as $designation_vp){
        ?>
            <option value="<?= $designation_vp['id'] ?>"><?= htmlspecialchars($designation_vp['designation']) ?></option>
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
