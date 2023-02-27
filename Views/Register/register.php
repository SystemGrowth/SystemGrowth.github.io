<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            
            <link rel="stylesheet" href="<?= media(); ?>/css/style_register.css">
            
            <title>Crea tu cuenta</title>
        </head>
    <body>
        <div class="login-container">
            <div class="login-info-container">
                <h1 class="title">Registrate</h1><br>
                <form class="inputs-container" action="">
                    <input class="input" type="text" placeholder="Nombres" required>
                    <input class="input" type="text" placeholder="Apellidos" required>
                    <input class="input" type="tel" placeholder="Telefono">
                    <input class="input" type="email" placeholder="E-mail" required>
                    <input class="input" type="password" placeholder="Contraseña"><br>
                    <button class="btn">Registrarse</button>
                    <a href="#">Atras</a>
                </form>
            </div>
                <img class="image-container" src="images/logo.png" alt="">
        </div>

    </body>
</html>