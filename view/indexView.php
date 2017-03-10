<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en" manifest="manifest.mf">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="webroot/css/indexView.min.css">
    <link rel="shortcut icon" type="image/ico" href="webroot/img/favicon.ico" />
    <link rel="stylesheet" href="webroot/font/flaticon.css">
    <title>DiwTrack</title>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <script>
        //Comprobamos que la pagina esta cargada por completo
        $(document).ready(function(){


            $('#loginUsername').focusout(function(){
                //console.log($('#inputOnChange').val());
                var peticion = "usuarioWS.php?username="+$('#loginUsername').val();
                console.log(peticion);
                $.ajax({url:peticion,success:function(result){
                    $("#foto").html("<img src='webroot/img/userphoto/"+result+"'>");
                }});
                $.ajax({url:peticion,error:function(result){
                    $("#foto").html("<img src='webroot/img/user.png'>");
                }});
            });

        });

    </script>





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
            <form action="index.php?location=login" method="post" name="formLogin">
                <div class="close" onclick="closeIdentificarse()"><img width="25" height="25" src="webroot/img/close_btn.png"></div>
                <div class="campos">
                    <h1>Iniciar sesion</h1>
                    <!--<div class="social">Redes sociales<br>
                        <img src="https://facebookbrand.com/wp-content/themes/fb-branding/prj-fb-branding/assets/images/fb-art.png" alt="facebook" height="40px" width="40px">
                        <img src="http://iconbug.com/data/2f/512/7090d90b6a06b0ca3d948bcea9e676f9.png" alt="google" height="40px" width="40px">
                        <img src="https://edubloxtutor.com/wp-content/uploads/2016/11/twitter-3-xxl.png" alt="twitter" height="40px" width="40px">
                    </div>-->
                    <div id="foto"><img src="webroot/img/user.png"></div>
                    <div class="campo"><span class="flaticon-man-user"></span><input id="loginUsername" type="text" name="username" placeholder="Nombre de usuario"></div>
                    <br>
                    <div class="campo"><span class="flaticon-padlock"></span><input type="password" name="password" placeholder="Contraseña"></div>
                    <br>
                    <div id="loginmsg"></div>

                    <div class="botones" style="text-align:center;">
                        <input type="submit" class="boton siguiente"  value="Entrar" name="signin">
                        <div>Usuario: heraclio Password: paso </div>
                        <!--<div class="boton siguiente" onclick="window.location='mainViewPreview.php'">¿Eres Victor? Entra por aquí</div>-->
                    </div>

                </div>
            </form>
        </div>
    </div>

    <!-- Ventana de registro -->
    <div id="signup">
        <div id="margenRegistro">
            <div class="close" onclick="closeRegistrarse()"><img width="25" height="25" src="webroot/img/close_btn.png"></div>
            <div id="signupVentana">
            <form method="post" name="formSignUp">
                <div id="signupPaginas">
                    <div class="pagina" id="signupPaso1">

                        <div class="campos">

                            <p><b>Paso 1:</b> Cuéntanos algo sobre tí</p>
                            <div class="campo"><span class="flaticon-man-user"></span><input type="text" name="usuario" pattern="/^[a-zA-Z0-9]+$/" placeholder="Nombre de usuario"></div>
                            <br>
                            <div class="campo"><span class="flaticon-padlock"></span><input type="password" name="password" placeholder="Contraseña"></div>
                            <br>
                            <div class="campo"><span class="flaticon-padlock"></span><input type="password" name="password2" placeholder="Repetir contraseña"></div>
                            <br>
                            <div class="campo"><span class="flaticon-arroba"></span><input type="text" name="email" placeholder="eMail"></div>
                            <br>
                            <div class="campo"><span class="flaticon-personal-id-card-of-a-man"></span><input type="text" name="nombreCompleto" placeholder="Nombre y apellidos"></div>
                            <br>
                            <div class="botones"><span class="boton siguiente" onclick="signUpSiguiente()">Siguiente</span></div>
                        </div>
                    </div>

                    <div class="pagina" id="signupPaso2">
                        <div class="campos">
                            <p><b>Paso 2:</b> Un poco mas sobre ti</p>
                            <div class="campo"><span class="flaticon-small-calendar"></span><input type="text" name="fechaNac" placeholder="Selector de fecha de nacimiento"></div>
                            <br>
                            <div class="campo"><span class="flaticon-height"></span><input type="text" name="estatura" placeholder="Estatura en centrimetros"></div>
                            <br>
                            <div class="campo"><span class="flaticon-scales"></span><input type="text" name="peso" placeholder="Peso en Kilogramos"></div>
                            <br>
                            <div class="campo">
                                <span class="flaticon-shape" style="color:#098f9c;"></span><input type="radio" name="sexo" value="hombre">Hombre</option>
                                <span class="flaticon-girl" style="color:#cc4dcc;"></span><input type="radio" name="sexo" value="mujer">Mujer</option>
                            </div>
                            <br>
                            <div class="botones">
                                <span class="boton anterior" onclick="signUpAtras()">Atras</span>
                                <span class="boton siguiente" onclick="signUpSiguiente()">Siguiente</span>
                            </div>
                        </div>
                    </div>

                    <div class="pagina" id="signupPaso3">

                        <div class="campos">
                            <p><b>Paso 3:</b> ¿Que tipo de corredor eres?</p>

                            <select name="tipocorredor" onchange="cambioCorredor(this);">
                              <option value="casual">Corredor casual</option>
                              <option value="medio">Corredor de medio fondo</option>
                              <option value="fondo">Corredor de fondo</option>
                              <option value="trail">Corredor de trail</option>
                            </select>

                            <div id="camposCasual" class="campos">
                                <h1>Corredor casual</h1>
                            </div>

                            <div id="camposMedioFondo" class="campos">
                                <p>Inserta tus mejores marcas</p>
                                <div class="campo"><span class="flaticon-chronometer-running"></span><input type="text" name="5km" placeholder="Mejor marca 5km" ></div>
                                <br>
                                <div class="campo"><span class="flaticon-chronometer-running"></span><input type="text" name="10km" placeholder="Mejor marca 10km"></div>
                                <br>
                                <div class="campo"><span class="flaticon-chronometer-running"></span><input type="text" name="mediamaraton" placeholder="Mejor marca media maraton"></div>

                            </div>

                            <div id="camposFondo" class="campos">
                                <p>Inserta tus mejores marcas</p>
                                <div class="campo"><span class="flaticon-chronometer-running"></span><input type="text" name="mediamaratonFondo" placeholder="Mejor marca media maraton"></div>
                                <br>
                                <div class="campo"><span class="flaticon-chronometer-running"></span><input type="text" name="maratonFondo" placeholder="Mejor maraton"></div>
                                <br>
                            </div>

                            <div id="camposTrail" class="campos">
                                <p>¿Cual ha sido tu carrera mas larga?</p>
                                <div class="campo"><span class="flaticon-personal-id-card-of-a-man"></span><input type="text" name="nombretrail" placeholder="Nombre"></div>
                                <br>
                                <div class="campo"><span class="flaticon-road-with-two-placeholders"></span><input type="text" name="distanciaTrail" placeholder="Distancia en metros"></div>
                                <br>
                                <div class="campo"><span class="flaticon-distance-to-travel-between-two-points"></span><input type="text" name="desnivelTrail" placeholder="desnivel"></div>
                                <br>

                                <div class="campo"><span class="flaticon-chronometer-running"></span><input type="text" name="tiempoTrail" placeholder="Tiempo"></div>
                                <br>

                            </div>


                            <script>
                            /** Script para cambiar las opciones segun la opcion que se seleccione **/
                                function ocultarOpciones()
                                {
                                    document.getElementById('camposCasual').style.display="none";
                                    document.getElementById('camposMedioFondo').style.display="none";
                                    document.getElementById('camposFondo').style.display="none";
                                    document.getElementById('camposTrail').style.display="none";
                                }
                                function cambioCorredor(selectObject)
                                {
                                    var divCasual = document.getElementById('camposCasual');
                                    var divMedioFondo = document.getElementById('camposMedioFondo');
                                    var divFondo = document.getElementById('camposFondo');
                                    var divTrail = document.getElementById('camposTrail');
                                    var opcion = selectObject.value;
                                    ocultarOpciones();
                                    switch (opcion){
                                        case "casual":
                                            divCasual.style.display="block";
                                            break;
                                        case "medio":
                                            divMedioFondo.style.display="block";
                                            break;

                                        case "fondo":
                                            divFondo.style.display="block";
                                            break;
                                        case "trail":
                                            divTrail.style.display="block";
                                            break;
                                    }

                                }

                            </script>

                            <div class="botones">
                                <span class="boton anterior" onclick="signUpAtras()">Atras</span>
                                <span class="boton siguiente" onclick="signUpSiguiente()">Siguiente</span>
                            </div>
                        </div>
                    </div>

                    <div class="pagina" id="signupPaso4">
                        <div class="campos">
                                <p><b>Paso 4:</b> Establece tus metas</p>
                                <div style="display:flex; flex-direction:row; justify-content:center;">
                                    <span style="display:flex; align-items:center;"><span class="flaticon-fire"></span><input style="width:100px" type="text" name="caloriasMeta" placeholder="Calorias"></span>
                                    <span style="display:flex; align-items:center;"><span class="flaticon-distance-to-travel-between-two-points"></span><input type="text"  style="width:100px" name="distanciaMeta" placeholder="Distancia"></span>
                                </div>
                                <br>
                                Rangos de pulsaciones
                                <div id="pulsaciones" style="">
                                    <table style="margin:0 auto;   border-spacing: 0px;">
                                        <tr>
                                            <td>Minima</td><td><input type="range" name="freqMin" max="300" min="70" value="70" onchange="calcularFreq(this)" ></td><td id="freqMin">0</td>
                                        </tr>
                                        <tr>
                                            <td>Sencillo</td><td><input type="range" name="freqSencillo" max="300" min="70" value="70" onchange="calcularFreq(this)" ></td><td id="freqSencillo">0</td>
                                        </tr>
                                        <tr>
                                            <td>Cardio</td><td><input type="range" name="freqCardio" max="300" min="70" value="70" onchange="calcularFreq(this)" ></td><td id="freqCardio">0</td>
                                        </tr>
                                        <tr>
                                            <td>Fitness</td><td><input type="range" name="freqFitness" max="300" min="70" value="70" onchange="calcularFreq(this)" ></td><td id="freqFitness">0</td>
                                        </tr>
                                        <tr>
                                            <td>Velocidad</td><td><input type="range" name="freqVelocidad" max="300" min="70" value="70" onchange="calcularFreq(this)" ></td><td id="freqVelocidad">0</td>
                                        </tr>
                                        <tr>
                                            <td>Sprint</td><td><input type="range" name="freqSprint" max="300" min="70" value="70" onchange="calcularFreq(this)" ></td><td id="freqSprint">0</td>
                                        </tr>
                                    </table>
                                    <script>
                                        function calcularFreq(changeVal)
                                        {
                                            document.getElementById(changeVal.name).innerHTML = changeVal.value;
                                        }
                                    </script>
                                </div>
                                <br>
                            <div class="botones">
                                <span class="boton anterior" onclick="signUpAtras()">Atras</span>
                                <input type="submit" name="signup" value="Finalizar" class="boton siguiente">
                            </div>

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
