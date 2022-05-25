<?php
    $action = $_GET['action'];

    if ($action == 'reg') {
        $title = 'Register';
        $login = false;
        include '/Model/validate-form.php';
        include '/Model/reg-model.php';
        include '/View/reg-view.php'; 
    }
?>