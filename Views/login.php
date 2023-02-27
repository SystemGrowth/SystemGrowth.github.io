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
                <h1 class="title">Inicia Sesión</h1>
                <div class="social-login">
                    <div class="social-login-element">
                        <img src="<?= media(); ?>/images/img_login/google.png" alt="google-image">
                        <span>Google</span>
                    </div>
                    <div class="social-login-element">
                        <img src="<?= media(); ?>/images/img_login/facebook.png" alt="facebook-image">
                        <span>Facebook</span>
                    </div>
                </div>
                <p>o</p>
                <form class="inputs-container">
                    <input class="input" type="text" placeholder="Usuario" required>
                    <input class="input" type="password" placeholder="Contraseña" id="inputcontraseña" required maxlength="20">
                    <label ><input type="checkbox" onclick="myFunction()">Ver contraseña</label> <br>
                    <p>Olvidaste tu contraseña? <span class="span">Click Aquí</span></p>
                    <button class="btn">Iniciar sesión</button>
                    <p>No tienes cuenta? <a class="span" href="">Registrate</a></p>
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
</html>