<!-- update -->
<?php 
//session_start();
$title = 'Update Record';
$login = false;
$id = $_GET['id'];
//print "id:". $id;
include '../nav.php';
include '../Model/validate-form.php';
include "../Model/update-model.php";
include '../View/reg-view.php'; 
?>