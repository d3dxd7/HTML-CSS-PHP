<?php
include('config.php');
session_start();
if(isset($_SESSION['email'])){
    header("Location: {$back_url}/dashboard.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <form method="post" action="login.php">
            <div>
                <input type="text" placeholder="E-mail" class="form-control" name="email"> 
            </div>
            <br>
            <div>
                <input type="password" placeholder="Senha" class="form-control" name="senha">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">LOGIN</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>