<?php 
    if (!isset($_SESSION["username"]) AND !isset($_SESSION["password"])) {
       session_start(); 
    }
?>

<html>
    <head>
        <title> MySite </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <style>
        .error {color: #FF0000;}
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">MVC Site</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="register.php">Register</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
                </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="view.php">View</a>
                </li -->
                <?php if (isset($_SESSION["username"]) AND isset($_SESSION["password"]))   { ?>
                 <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="user-details.php">Details</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" aria-current="page" href="logout.php">Logout</a>
                </li>
                <?php } ?>
            </ul>
            <form class="d-flex">
                <!-- <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button> -->
            </form>
            </div>
        </div>
        </nav> <br>
</html>