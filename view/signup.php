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
