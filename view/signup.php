

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



                                        //alert(changeVal.name);
                                    }



                                </script>
                            </div>
                            <br>
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
