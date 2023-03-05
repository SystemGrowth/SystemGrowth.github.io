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
                <form class="login-form"  name="formLogin" id="formLogin" action="">
                    <input id="txtNom_user" name="txtNom_user" class="input" type="text" placeholder="Ingresa tu usuario" autofocus>
                    <input id="txtPassword" name="txtPassword" class="input" type="password" placeholder="Ingresa tu contraseña" required maxlength="20">
                    <label ><input type="checkbox" onclick="myFunction()">Ver contraseña</label>
                    <button class="btn" type="submit">Iniciar sesión</button>
                </form>
            </div>
                <img class="image-container" src="<?= media(); ?>/images/img_login/logo.png" alt="">
        </div>


        <script type="text/javascript">
            function myFunction() {
                var x =document.getElementById("txtPassword");
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

    <script>
        const base_url = "<?= base_url(); ?>";
    </script>
    <!-- Essential javascripts for application to work-->
    <script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
    <script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
    <script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
    <script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>
    
</html>