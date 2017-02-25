<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="webroot/css/indexView.min.css">
    <link rel="shortcut icon" type="image/ico" href="webroot/img/favicon.ico" />
    <title>DiwTrack</title>

    <script>
        function registrarse()
        {
            document.getElementById('signup').style.visibility="visible";
        }
        function closeRegistrarse()
        {
            document.getElementById('signup').style.visibility="hidden";
        }

        function identificarse()
        {
            document.getElementById('signin').style.visibility="visible";
        }
        function closeIdentificarse()
        {
            document.getElementById('signin').style.visibility="hidden";
        }

        function signUpSiguiente()
        {
            document.getElementById('signupPaginas').style.left=document.getElementById('signupPaginas').offsetLeft-600+"px"
        }
        function signUpAtras()
        {
            document.getElementById('signupPaginas').style.left=document.getElementById('signupPaginas').offsetLeft+600+"px"
        }
    </script>
</head>
<body>
    <header>
        <span class="titulo">DiwTrack</span>
        <span id="botonesHeader">    <button class="signinBT" onclick="identificarse()">Identificate</button><button class="signupBT" onclick="registrarse()">Regístrate Gratis</button></span>
    </header>

    <!-- Ventana de inicio de sesion -->
    <?php require_once("signin.php"); ?>



    <!-- Ventana de registro -->
    <?php require_once("signup.php"); ?>

    <!-- Contenido de la pagina -->
    <div id="centrado">
        <div id="bloque1">
            <div>
            <h2>Ponte en forma y rompe tus limites.</h2>
            <ul>
                <li>Personalice distintas zonas de frecuencia cardíaca.</li>
                <li>Seleccione el tipo de corredor</li>
                    <ul>
                        <li>Corredor casual</li>
                        <li>Corredor de medio fondo</li>
                        <li>Corredor de fondo</li>
                        <li>Corredor de trail</li>
                    </ul>
                </li>
                <li>Pongase metas</li>
                <li>Visualice sus rutas y estadisticas</li>
                <li>Comparta sus logros en las redes sociales</li>
            </ul>
            <div id="markets"><img src="webroot/img/google-play.png" width="150px"> <img src="webroot/img/app-store.png" width="150px"></div>

            </div>
            <div>
                <img src="webroot/img/nexus5.png" height="600">
            </div>
        </div>
    </div>

</body>
</html>
