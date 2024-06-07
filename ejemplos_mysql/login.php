<?php
session_start();
if(isset($_SESSION['logged']) || $_SESSION['logged'] == 1){
    header('Location: index.php');
    die();
}
?>
<html>

<head>

    <title>Login</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container text-center">

    <h1>Iniciar sesion</h1>

    <div>

        <form action="checkLogin.php" method="POST">

            <div>

                <input type="text" name="username" placeholder="Nombre de usuario" class="form-control" required/>

            </div>

            <div>

                <input type="password" name="password" placeholder="Contraseña" class="form-control" required/>

            </div>

            <div class="row">
                <div class="col-sm-6">

                    <input type="submit" value="Iniciar sesion" class="btn btn-primary"/>

                </div>
                <div class="col-sm-6">

                    <a href="signup.php" class="btn btn-primary">Nuevo usuario</a>

                </div>

            </div>

        </form>

    </div>

    <?php
    if(isset($_GET['login']) && strcmp($_GET["login"],"error") == 0){
        echo '<div class="alert alert-danger">Nombre de usuario o contraseña incorrectos</div>';
    }
    ?>

</div>

</body>

</html>

