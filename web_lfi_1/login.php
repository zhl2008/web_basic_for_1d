<?php
session_start();
if (isset($_POST['name'])){
    $_SESSION['name'] = $_POST['name'];
    header("Location: index.php");
    exit();
}
?>
<html>
    <head>
        <meta charset="utf-8" />
        <title>show me your hat</title>
        <link rel="stylesheet" href=css/bootstrap.min.css />
        <link rel="stylesheet" href=css/bootstrap-theme.min.css />
        <script src="js/jquery-2.2.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
    <style>
            .container{
                max-width: 400px;
                margin: 20px auto;
            }
        </style>
    </head>
    <body>
        <div class="container">
        <h2>Login</h2>

        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="name">your name</label>
                <input class="form-control" type="name" id="name" name="name" placeholder="name" />
            </div>
            <input type="submit" name="submit" class="btn btn-primary btn-block" value="check" />
        </form>
        </div>
    </body>
</html>
