<div id="signup">
    <div id="margenRegistro">
        <div class="close" onclick="closeRegistrarse()"><img width="25" height="25" src="webroot/img/close_btn.png"></div>
        <div id="signupVentana">
        <form>


            <div id="signupPaginas">
                <div class="pagina" id="signupPaso1">

                    <div class="campos">

                        <p><b>Paso 1:</b> Cuéntanos algo sobre tí</p>
                        <div class="campo"><span class="flaticon-man-user"></span><input type="text" name="usuario" placeholder="Nombre de usuario"></div>
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


                        <!-- Tipo de corredor -->
                        <!--
                            medio fondo 5km
                            medio fondo 10km
                            medio fondo Media Maraton
                        -->

                    <div class="campos">
                            <p><b>Paso 3:</b> ¿Que tipo de corredor eres?</p>
                        <input type="text" name="usuario">
                        <div id="loginmsg"></div>
                        <div class="botones">
                            <span class="boton anterior" onclick="signUpAtras()">Atras</span>
                            <span class="boton siguiente" onclick="signUpSiguiente()">Siguiente</span>
                        </div>
                    </div>
                </div>

                <div class="pagina" id="signupPaso4">
                    <div class="campos">
                            <p><b>Paso 4:</b> Establece tus metas</p>
                        <input type="text" name="usuario">
                        <div id="loginmsg"></div>
                        <div class="botones">
                            <span class="boton anterior" onclick="signUpAtras()">Atras</span>
                            <span class="boton siguiente" onclick="">Finalizar</span>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
