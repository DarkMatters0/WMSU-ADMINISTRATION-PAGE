<?php
    require_once('../../classes/designation_opstaff.class.php');

    $designation_OpstaffObj = new DesignationOpstaff();

    $designation_opstaff = $designation_OpstaffObj->fetchdesignationOpstaff();

    header('Content-Type: application/json');
    echo json_encode($designation_opstaff);
?>
