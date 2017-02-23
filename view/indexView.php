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
        <div id="margenRegistro">
            <div class="close" onclick="closeRegistrarse()"><img width="25" height="25" src="webroot/img/close_btn.png"></div>
            <div id="signupVentana">
            <form>


                <div id="signupPaginas">
                    <div class="pagina" id="signupPaso1">

                        <div class="campos">

                            <p><b>Paso 1:</b> Cuéntanos algo sobre tí</p>
                            <input type="text" name="usuario" placeholder="Nombre de usuario">
                            <br>
                            <input type="text" name="password" placeholder="Contraseña">
                            <br>
                            <input type="text" name="password2" placeholder="Repetir contraseña">
                            <br>
                            <input type="text" name="nombreCompleto" placeholder="Nombre y apellidos">
                            <br>


                            <div id="loginmsg"></div>
                            <span class="boton siguiente" onclick="signUpSiguiente()">Siguiente</span>
                        </div>
                    </div>

                    <div class="pagina" id="signupPaso2">
                        <div class="campos">
                            <p><b>Paso 2:</b> Un poco mas sobre ti</p>
                            <input type="text" name="fechaNac" placeholder="Selector de fecha de nacimiento">



                            <br>
                            <input type="text" name="estatura" placeholder="Estatura en centrimetros">
                            <!--<div class="range">Estatura: <input onchange="document.getElementById('valorEstatura').innerHTML=this.value+ ' cm';" name="estatura" type="range" value="160" min="120" max="255" step="1"><span id="valorEstatura">160 cm</span></div>-->
                            <br>
                            <input type="text" name="peso" placeholder="Peso en Kilogramos">

                            <br>
                            <input type="text" name="fechaNac" placeholder="Estatura">


                            <div id="loginmsg"></div>

                            <br>

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
