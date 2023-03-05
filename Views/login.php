<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <link rel="stylesheet" href="<?= media(); ?>/css/style_login.css">
            
            <title>Inicia sesión</title>
        </head>
    <body>
        <div class="login-container">
            <div class="login-info-container">
                <h1 class="title">Inicia Sesión</h1>  <br>              
                <form class="inputs-container">
                    <input class="input" type="text" placeholder="Ingresa tu usuario" required>
                    <input class="input" type="password" placeholder="Ingresa tu contraseña" id="inputcontraseña" required maxlength="20">
                    <label ><input type="checkbox" onclick="myFunction()">Ver contraseña</label>
                    <button class="btn">Iniciar sesión</button>
                </form>
            </div>
                <img class="image-container" src="<?= media(); ?>/images/img_login/logo.png" alt="">
        </div>


        <script type="text/javascript">
            function myFunction() {
                var x =document.getElementById("inputcontraseña");
                if(x.type == "password"){
                    x.type = "text";
                }else{
                    x.type = "password";
                }
            }
        </script>
           
    </body>
    <footer>
        <h3 class="footer">
        <?php
            $anio_actual = date("Y");
            $nombre_autor = "Jeanpier Palomino - Dante Revilla";
            ?>
            <footer>
            <p>&copy; <?php echo $anio_actual; ?> <?php echo $nombre_autor; ?>. Todos los derechos reservados.</p>
            </footer>
        </h3>
    </footer>
</html>