<!-- Call up the header and navbar and set page title-->
<?php
$page_title= "Admin Update";
include 'includes/header.php';
include 'includes/nav.php';

include_once('includes/connection.php');

$AdminID = mysqli_real_escape_string($conn, $_GET['admin_id']);

// Check if user got here legitimatly when the update_btn is clicked
//The data will be stored in variables

if (isset($_POST['update_btn'])){
    $email = myaqli_real
}
?>