<!DOCTYPE html>
<html>
    <head>
        <title>APrit</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <form action="home.php" method="POST" >
            <div>
                <img src="logo.jpg" alt="logo">
                <p>Nombre</p><input type="text" name="txtNombre"  placeholder="Ingresa tu usuario" require>
            </div>
    
            <div>
            <p>Clave</p><input type="password" name="clave"  placeholder="Contraseña" require>
            </div>
            <br>

            <div>
            <input id="submit" type="submit" name="boton" value="Ingresar">
            </div>
        </form>
    </body>
</html>