<!-- ?php session_start(); ?    -->
<html>
    <head>
        <title> MVC-Site </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    </head>
    <body> <!--  Route -->
<<<<<<< HEAD
        <h1>Hello! </h1>
=======
        <h1>Hello World!</h1>      
>>>>>>> hello-comment
        <?php include 'nav.php';
              include "config.php"; ?>

        <a href="register.php" class="btn btn-link">Register</a>
        </br>
        <?php if (!isset($_SESSION["username"]) AND !isset($_SESSION["password"]))  { ?>
        <a href="login.php" class="btn btn-link">Login   </a>
        </br> 
        <?php } ?>
        <a href="view.php" class="btn btn-link">View   </a> 
        
    </body>
</html>

