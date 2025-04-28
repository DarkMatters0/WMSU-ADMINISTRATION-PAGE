<?php
    require_once('../../classes/designation_vp.class.php');

    $designation_vpObj = new DesignationVp();

    $designation_vp = $designation_vpObj->fetchdesignation_vp();

    header('Content-Type: application/json');
    echo json_encode($designation_vp);
?>
