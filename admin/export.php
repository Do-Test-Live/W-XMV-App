<?php

session_start();
if (!isset($_SESSION['id'])) {
    header("Location: index.php");
}
include('../config/dbconfig.php');

$query = $con->query("SELECT * FROM `contact`");


header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=contact_details' . date("_Ymdhisa") . '.csv');
$output = fopen("php://output", "w");
fputcsv($output, array('Sl No', 'Name', 'Email', 'Contact Number'));

while ($rows = $query->fetch_assoc()) {
    fputcsv($output, array($rows["id"], $rows["name"], $rows["email"], $rows["contact_no"]));
}
fclose($output);
