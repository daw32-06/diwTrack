<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="webroot/css/indexView.min.css">
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
    <div id="signin">
        <div id="signinVentana">
            <form>
                <div class="close" onclick="closeIdentificarse()"><img width="25" height="25" src="webroot/img/close_btn.png"></div>
                <div class="campos">
                    <h1>Inicia sesion</h1>
                    <div class="social">Redes sociales<br>
                        <img src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" alt="facebook" height="40px" width="40px">
                        <img src="http://iconbug.com/data/2f/512/7090d90b6a06b0ca3d948bcea9e676f9.png" alt="google" height="40px" width="40px">
                        <img src="https://edubloxtutor.com/wp-content/uploads/2016/11/twitter-3-xxl.png" alt="twitter" height="40px" width="40px">
                    </div>
                    O inicia sesion con tu usuario y contraseña
                    <input type="text" placeholder="Usuario" name="usuario">

                    <input type="text" placeholder="Password"name="password">
                    <div id="loginmsg"></div>
                    <button>ENTRAR</button>
                </div>
            </form>
        </div>
    </div>



    <!-- Ventana de registro -->
    <div id="signup">
        <div id="signupVentana">
            <form>
                <div class="close" onclick="closeRegistrarse()"><img width="25" height="25" src="webroot/img/close_btn.png"></div>
                <div id="signupPaginas">
                    <div class="pagina" id="signupPaso1">

                        <div class="campos">
                            <input type="text" name="usuario">
                            <div id="loginmsg"></div>
                            <span class="boton siguiente" onclick="signUpSiguiente()">Siguiente</span>
                        </div>
                    </div>

                    <div class="pagina" id="signupPaso2">
                        <div class="campos">
                            <input type="text" name="usuario">
                            <div id="loginmsg"></div>
                            <span class="boton anterior" onclick="signUpAtras()">Atras</span>
                            <span class="boton siguiente" onclick="signUpSiguiente()">Siguiente</span>
                        </div>
                    </div>

                    <div class="pagina" id="signupPaso3">

                        <div class="campos">
                            <input type="text" name="usuario">
                            <div id="loginmsg"></div>
                            <span class="boton anterior"onclick="signUpAtras()">Atras</span>
                            <span class="boton siguiente"onclick="signUpSiguiente()">Siguiente</span>
                        </div>
                    </div>

                    <div class="pagina" id="signupPaso4">
                        <div class="campos">
                            <input type="text" name="usuario">
                            <div id="loginmsg"></div>
                            <span class="boton anterior"onclick="signUpAtras()">Atras</span>
                            <span class="boton siguiente">Finalizar</span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>




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
