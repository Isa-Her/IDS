<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Captura de datos</title>
        <script src="https://kit.fontawesome.com/a71707a89a.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="dive">
            <form action="resultados.php" method="Post">
                 <center>
                    <h1>Captura de datos personales </h1>
                    <br>
                    <h2>Ingresa los datos que se te piden</h2>
                    <br>
                    <p>Mi primera encuesta</p>
                    <hr>
                    <label for="Name">Nombre</label>
                    <input type="text" name="Name" id="Name" value="Ingresa tu nombre"><hr>
                    <label for="Age">Edad</label>
                    <input type="number" name="Age" id="Age" value="Ingresa tu edad"><hr>
                    <label for="City">Ciudad</label>
                    <input type="text" name="City" id="City" value="Ingresa tu Ciudad"><hr>
                    <label for="Hobby">Pasatiempo</label>
                    <input type="text" name="Hobby" id="Hobby" value="Ingresa tu pasatiempo"><hr>
                    <button type="submit">¡Ingresamos datos!</button> 
                 </center>
            </form>

         </div>
    </body>
</html>
