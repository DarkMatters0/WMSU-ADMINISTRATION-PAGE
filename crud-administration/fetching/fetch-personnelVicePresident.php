<?php

require_once '../../classes/personnel.class.php';
$personnelObj = new Personnel();

$id = $_GET['id'];
$personnelVicePresident = $personnelObj->fetchRecord($id);

header('Content-Type: application/json');
echo json_encode($personnelVicePresident);