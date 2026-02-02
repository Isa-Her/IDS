<!DOCTYPE html>
<html lang="en">
    <head>
        <div class="dive">
        <meta charset="UTF-80">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>¡Resultados de datos!</title>
        <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>¡Resultados!</h1>
        <center>
            <img src="img1.jpg" alt="paisaje">
            <?php
                $nombre = $_POST['Name'];
                $edad = $_POST['Age'];
                $ciudad = $_POST['City'];
                $pasatiempo = $_POST['Hobby'];

                echo '<p><a>Nombre: </a> '.$nombre.'</p>';
                echo '<p><a>Edad: </a> '.$edad.'</p>';
                echo '<p><a>Ciudad: </a> '.$ciudad.'</p>';
                echo '<p><a>Pasatiempo: </a> '.$pasatiempo.'</p>';
            ?>
        
        <h2>¡Bien hecho!</h2>
        <div id="popUpOverlay"></div>
        <div id="popUpBox">
            <div id="box">
                <i class="fas fa-question-circle fa-5x"></i>
                <h1>¿Volver a ingresar datos?</h1>
                <div id="closeModal"></div>
            </div>
        </div>
        <button onclick="Alert.render('You look very pretty today')" class="btn">¡Volver a ingresar!</button>
        <script src=app.js></script>
        </div>
        </center>
    </body>
</html>