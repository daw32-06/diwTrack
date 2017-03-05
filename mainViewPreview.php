<!DOCTYPE html>
<!-- saved from url=(0050)https://develop.tallernt.es/graficasCirculares.htm -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DiwTrack</title>
    <link rel="shortcut icon" type="image/ico" href="webroot/img/favicon.ico" />
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script>

        /** Grafica de ejemplo en el mapa **/
        function graficaHor()
        {
            var c = document.getElementById("graficaH");
            var ctx = c.getContext("2d");

            //Grilla
            ctx.beginPath();
            ctx.strokeStyle="rgba(0,0,0,0.5)";
            ctx.lineWidth = 3;
            ctx.lineCap = "round";
            ctx.moveTo(10,10);
            ctx.lineTo(10,210);
            ctx.lineTo(1010,210);
            ctx.stroke();
            ctx.beginPath();
            ctx.lineWidth=1;
            ctx.strokeStyle="rgba(0,0,0,0.1)";
            ctx.moveTo(10,10);
            ctx.lineTo(1010,10);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(10,50);
            ctx.lineTo(1010,50);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(10,90);
            ctx.lineTo(1010,90);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(10,130);
            ctx.lineTo(1010,130);
            ctx.stroke();
            ctx.beginPath();
            ctx.moveTo(10,170);
            ctx.lineTo(1010,170);
            ctx.stroke();



            // Grafica
            ctx.beginPath();
            ctx.strokeStyle="#5126b2";
            ctx.lineWidth=4;
            ctx.moveTo(10,125);
            ctx.lineTo(110,90);
            ctx.lineTo(210,150);
            ctx.lineTo(310,80);
            ctx.lineTo(410,90);
            ctx.lineTo(510,120);
            ctx.lineTo(610,93);
            ctx.lineTo(710,45);
            ctx.lineTo(810,94);
            ctx.lineTo(910,100);
            ctx.lineTo(1010,120);
            ctx.stroke();
            ctx.strokeStyle="rgba(81,38,178,0.7)"; // Este es el mismo color que el de la linea pero con transparencia
            ctx.fillStyle="rgba(81,38,178,0.7)";


            ctx.lineTo(1010,210);
            ctx.lineTo(10,210);
            ctx.fill();

        }

        function graficaDer()
        {
            var c = document.getElementById("graficaDer");
            var ctx = c.getContext("2d");

            //Guias
            ctx.beginPath();
            ctx.arc(150,150,100,0*Math.PI,2*Math.PI,true);
            ctx.strokeStyle="rgba(255,255,255,0.1)";
            ctx.lineWidth = 3;
            ctx.lineCap = "round";
            ctx.stroke();

            ctx.beginPath();
            ctx.arc(150,150,80,0*Math.PI,2*Math.PI,true);
            ctx.strokeStyle="rgba(255,255,255,0.1)";
            ctx.lineWidth = 3;
            ctx.lineCap = "round";
            ctx.stroke();

            ctx.beginPath();
            ctx.arc(150,150,60,0*Math.PI,2*Math.PI,true);
            ctx.strokeStyle="rgba(255,255,255,0.1)";
            ctx.lineWidth = 3;
            ctx.lineCap = "round";
            ctx.stroke();

            ctx.beginPath();
            ctx.arc(150,150,40,0*Math.PI,2*Math.PI,true);
            ctx.strokeStyle="rgba(255,255,255,0.1)";
            ctx.lineWidth = 3;
            ctx.lineCap = "round";
            ctx.stroke();


            //Primera grafica
            ctx.beginPath();
            ctx.arc(150,150,100,1.5*Math.PI,1.7*Math.PI,true);
            ctx.strokeStyle="#afA";
            ctx.lineWidth = 5;
            ctx.lineCap = "round";
            ctx.stroke();

            //Segunda Grafica
            ctx.beginPath();
            ctx.arc(150,150,80,1.5*Math.PI,0.2*Math.PI,true);
            ctx.strokeStyle="#f9ba56";
            ctx.lineWidth = 5;
            ctx.lineCap = "round";
            ctx.stroke();
            //Tercera Grafica
            ctx.beginPath();
            ctx.arc(150,150,60,1.5*Math.PI,0.6*Math.PI,true);
            ctx.strokeStyle="#dd10aa";
            ctx.lineWidth = 5;
            ctx.lineCap = "round";
            ctx.stroke();
            //Cuarta Grafica
            ctx.beginPath();
            ctx.arc(150,150,40,1.5*Math.PI,1*Math.PI,true);
            ctx.strokeStyle="#10ddd9";
            ctx.lineWidth = 5;
            ctx.lineCap = "round";
            ctx.stroke();

        }

        function inicio()
        {
            graficaDer();
            graficaHor();
        }



    </script>
    <link rel="stylesheet" href="webroot/css/mainView.min.css">

</head>
<body onload="inicio()" cz-shortcut-listen="true">

    <!-- ESTAS NOTAS SE DEBEN DE BORRAR EN LA VERSION FINAL -->
    <div id="notasPreview" style="position: fixed; z-index: 22; box-shadow: 4px 4px 2px #888888;padding:5px;right: 320px; background-color: #ff0; border:solid 1px #555; height:200px; width:250px; top:120px;">
        <div style="width:100%; text-align:center;"><b>Notas desarrollo</b></div>
        <ul style=" padding-left:25px;">

            <li>El calendario es de prueba </li>
        </ul>


    </div>
    <!-- Menus -->
    <div id="menuizq">
        <span id="closeIzq" onclick="$('#menuizq').css('left','-300px');">&#10006 </span>

        <div id="usuarioElem">
            <img id="fotoUsuario" src="webroot/img/user.png">
            <div id="nombreUsuario">Nombre Completo</div>
            <!-- Calendario https://bootstrap-datepicker.readthedocs.io/en/latest/ -->
            <div id="calendario"><img src="webroot/img/calendarPreview.png"></div>
            <div id="opciones">
                <ul>
                    <li><img src="webroot/img/uploadTrack.png">Subir Track</li>
                    <li><img src="webroot/img/stats.png">Ver estadisticas</li>
                    <li><img src="webroot/img/settings.png">Configuración</li>
                </ul>
            </div>
            <div id="pie">Juan José Rubio Iglesias <br>DAW32 - 2017</div>
        </div>
        <br>

    </div>


    <div id="menuder">
        <span id="closeDer" onclick="$('#menuder').css('right','-300px');">&#10006 </span>

        <div id="fechaTrack">05 Marzo 2017</div>
        <div id="descTrack">Ruta por Benavente</div>

        <canvas id="graficaDer" width="300" height="300">
        </canvas>
        <div class="leyenda"><img src="webroot/img/distancia.png"> 2.67Km </div>
        <div class="leyenda"><img src="webroot/img/calorias.png">800Cal</div>
        <div class="leyenda"><img src="webroot/img/pulsaciones.png">&#x2b9d 198 ppm<br>&#x2b9f 95 ppm </div>
        <div class="leyenda"><img src="webroot/img/velocidad.png">16.5 <sup>Km</sup>/<sub>H</sub></div>

        <div id="share">
            <img src="webroot/img/share.png" alt="Hacer Track publico" title="Publicar track">
            <img src="webroot/img/fbWhite.png" alt="Compartir con facebook" title="Compartir con Facebook">
            <img src="webroot/img/twitterWhite.png" alt="Compartir con twitter" title="Compartir con Twitter">
            <img src="webroot/img/igWhite.png" alt="Compartir captura en instagram" title="Compartir con Instagram">

        </div>



    </div>
    <!-- Fin de menus -->

    <!-- Contenido principal -->
    <div id="contenido">
        <header>
            <img id="botonUsuario" src="webroot/img/menuizqicon.png" onclick="$('#menuizq').css('left','0px');" alt="Abrir menu de usuario">
            <div id="titulo">DiwTrack</div>
            <button id="botonDetalle" onclick="$('#menuder').css('right','0');">Abrir detalle</button>
        </header>


        <!-- MAPAS -->

        <script>
        function initMap() {
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 16,
                center: {lat: 42.001, lng: -5.679,},
                mapTypeId: google.maps.MapTypeId.TERRAIN
              });
                // Coordenadas
              var flightPlanCoordinates = [
                  {
                    lat: 42.0000346,
                    lng: -5.6784434,
                  },
                  {
                    lat: 42.0001008,
                    lng: -5.6786880,
                  },
                  {
                    lat: 42.0002730,
                    lng: -5.6788195,
                  },
                  {
                    lat: 42.0004458,
                    lng: -5.6787388,
                  },
                  {
                    lat: 42.0006294,
                    lng: -5.6787480,
                  },
                  {
                    lat: 42.0008159,
                    lng: -5.6788117,
                  },
                  {
                    lat: 42.0010038,
                    lng: -5.6787866,
                  },
                  {
                    lat: 42.0012101,
                    lng: -5.6787453,
                  },
                  {
                    lat: 42.0013952,
                    lng: -5.6787408,
                  },
                  {
                    lat: 42.0015658,
                    lng: -5.6786602,
                  },
                  {
                    lat: 42.0017293,
                    lng: -5.6785215,
                  },
                  {
                    lat: 42.0019088,
                    lng: -5.6784305,
                  },
                  {
                    lat: 42.0020489,
                    lng: -5.6782675,
                  },
                  {
                    lat: 42.0023124,
                    lng: -5.6781713,
                  },
                  {
                    lat: 42.0024867,
                    lng: -5.6780807,
                  },
                  {
                    lat: 42.0026892,
                    lng: -5.6780058,
                  },
                  {
                    lat: 42.0028734,
                    lng: -5.6780075,
                  },
                  {
                    lat: 42.0030612,
                    lng: -5.6779808,
                  },
                  {
                    lat: 42.0032002,
                    lng: -5.6781369,
                  },
                  {
                    lat: 42.0033831,
                    lng: -5.6781018,
                  },
                  {
                    lat: 42.0035663,
                    lng: -5.6780640,
                  },
                  {
                    lat: 42.0037518,
                    lng: -5.6780441,
                  },
                  {
                    lat: 42.0039329,
                    lng: -5.6780774,
                  },
                  {
                    lat: 42.0041095,
                    lng: -5.6781319,
                  },
                  {
                    lat: 42.0039974,
                    lng: -5.6783563,
                  },
                  {
                    lat: 42.0038321,
                    lng: -5.6784697,
                  },
                  {
                    lat: 42.0036565,
                    lng: -5.6785369,
                  },
                  {
                    lat: 42.0035022,
                    lng: -5.6786681,
                  },
                  {
                    lat: 42.0033347,
                    lng: -5.6788104,
                  },
                  {
                    lat: 42.0031528,
                    lng: -5.6789343,
                  },
                  {
                    lat: 42.0029654,
                    lng: -5.6790056,
                  },
                  {
                    lat: 42.0027939,
                    lng: -5.6791099,
                  },
                  {
                    lat: 42.0026190,
                    lng: -5.6791881,
                  },
                  {
                    lat: 42.0024886,
                    lng: -5.6793638,
                  },
                  {
                    lat: 42.0023176,
                    lng: -5.6794977,
                  },
                  {
                    lat: 42.0021667,
                    lng: -5.6796319,
                  },
                  {
                    lat: 42.0020494,
                    lng: -5.6798311,
                  },
                  {
                    lat: 42.0019143,
                    lng: -5.6799987,
                  },
                  {
                    lat: 42.0017502,
                    lng: -5.6801133,
                  },
                  {
                    lat: 42.0015925,
                    lng: -5.6802656,
                  },
                  {
                    lat: 42.0014887,
                    lng: -5.6804681,
                  },
                  {
                    lat: 42.0014121,
                    lng: -5.6806969,
                  },
                  {
                    lat: 42.0012942,
                    lng: -5.6809133,
                  },
                  {
                    lat: 42.0012293,
                    lng: -5.6811474,
                  },
                  {
                    lat: 42.0011871,
                    lng: -5.6814061,
                  },
                  {
                    lat: 42.0011542,
                    lng: -5.6816475,
                  },
                  {
                    lat: 42.0010606,
                    lng: -5.6818901,
                  },
                  {
                    lat: 42.0008853,
                    lng: -5.6819723,
                  },
                  {
                    lat: 42.0006771,
                    lng: -5.6819487,
                  },
                  {
                    lat: 42.0004955,
                    lng: -5.6819424,
                  },
                  {
                    lat: 42.0003029,
                    lng: -5.6819089,
                  },
                  {
                    lat: 42.0001384,
                    lng: -5.6820411,
                  },
                  {
                    lat: 41.9999862,
                    lng: -5.6818638,
                  },
                  {
                    lat: 41.9998301,
                    lng: -5.6817398,
                  },
                  {
                    lat: 41.9996777,
                    lng: -5.6816102,
                  },
                  {
                    lat: 41.9995028,
                    lng: -5.6815507,
                  },
                  {
                    lat: 41.9993152,
                    lng: -5.6815042,
                  },
                  {
                    lat: 41.9991295,
                    lng: -5.6814660,
                  },
                  {
                    lat: 41.9989419,
                    lng: -5.6814780,
                  },
                  {
                    lat: 41.9987613,
                    lng: -5.6815172,
                  },
                  {
                    lat: 41.9987064,
                    lng: -5.6812819,
                  },
                  {
                    lat: 41.9986715,
                    lng: -5.6810269,
                  },
                  {
                    lat: 41.9986531,
                    lng: -5.6807771,
                  },
                  {
                    lat: 41.9987647,
                    lng: -5.6805474,
                  },
                  {
                    lat: 41.9989472,
                    lng: -5.6805177,
                  },
                  {
                    lat: 41.9991369,
                    lng: -5.6805004,
                  },
                  {
                    lat: 41.9993091,
                    lng: -5.6805728,
                  },
                  {
                    lat: 41.9994497,
                    lng: -5.6807256,
                  },
                  {
                    lat: 41.9994934,
                    lng: -5.6809931,
                  },
                  {
                    lat: 41.9995366,
                    lng: -5.6812352,
                  },
                  {
                    lat: 41.9996806,
                    lng: -5.6813855,
                  },
                  {
                    lat: 41.9998359,
                    lng: -5.6815114,
                  },
                  {
                    lat: 41.9999842,
                    lng: -5.6816502,
                  },
                  {
                    lat: 42.0001641,
                    lng: -5.6817530,
                  },
                  {
                    lat: 42.0003534,
                    lng: -5.6817383,
                  },
                  {
                    lat: 42.0005277,
                    lng: -5.6818319,
                  },
                  {
                    lat: 42.0007139,
                    lng: -5.6818979,
                  },
                  {
                    lat: 42.0009186,
                    lng: -5.6819249,
                  },
                  {
                    lat: 42.0010726,
                    lng: -5.6817878,
                  },
                  {
                    lat: 42.0011249,
                    lng: -5.6815478,
                  },
                  {
                    lat: 42.0011693,
                    lng: -5.6813025,
                  },
                  {
                    lat: 42.0012718,
                    lng: -5.6810936,
                  },
                  {
                    lat: 42.0013251,
                    lng: -5.6808545,
                  },
                  {
                    lat: 42.0014212,
                    lng: -5.6806142,
                  },
                  {
                    lat: 42.0015832,
                    lng: -5.6804685,
                  },
                  {
                    lat: 42.0016873,
                    lng: -5.6802475,
                  },
                  {
                    lat: 42.0017352,
                    lng: -5.6799993,
                  },
                  {
                    lat: 42.0019170,
                    lng: -5.6800059,
                  },
                  {
                    lat: 42.0020217,
                    lng: -5.6798060,
                  },
                  {
                    lat: 42.0019691,
                    lng: -5.6795695,
                  },
                  {
                    lat: 42.0020711,
                    lng: -5.6793420,
                  },
                  {
                    lat: 42.0022107,
                    lng: -5.6791699,
                  },
                  {
                    lat: 42.0023486,
                    lng: -5.6789876,
                  },
                  {
                    lat: 42.0024192,
                    lng: -5.6787473,
                  },
                  {
                    lat: 42.0025420,
                    lng: -5.6785610,
                  },
                  {
                    lat: 42.0026269,
                    lng: -5.6783417,
                  },
                  {
                    lat: 42.0027361,
                    lng: -5.6781389,
                  },
                  {
                    lat: 42.0029268,
                    lng: -5.6782015,
                  },
                  {
                    lat: 42.0031193,
                    lng: -5.6781962,
                  },
                  {
                    lat: 42.0033189,
                    lng: -5.6781088,
                  },
                  {
                    lat: 42.0034291,
                    lng: -5.6779045,
                  },
                  {
                    lat: 42.0034532,
                    lng: -5.6776552,
                  },
                  {
                    lat: 42.0032841,
                    lng: -5.6775616,
                  },
                  {
                    lat: 42.0031082,
                    lng: -5.6774920,
                  },
                  {
                    lat: 42.0030291,
                    lng: -5.6772575,
                  },
                  {
                    lat: 42.0030193,
                    lng: -5.6770134,
                  },
                  {
                    lat: 42.0030074,
                    lng: -5.6767669,
                  },
                  {
                    lat: 42.0030012,
                    lng: -5.6765238,
                  },
                  {
                    lat: 42.0029949,
                    lng: -5.6762762,
                  },
                  {
                    lat: 42.0029983,
                    lng: -5.6760227,
                  },
                  {
                    lat: 42.0030312,
                    lng: -5.6757718,
                  },
                  {
                    lat: 42.0030346,
                    lng: -5.6755163,
                  },
                  {
                    lat: 42.0030377,
                    lng: -5.6752418,
                  },
                  {
                    lat: 42.0030275,
                    lng: -5.6749927,
                  },
                  {
                    lat: 42.0030580,
                    lng: -5.6747445,
                  },
                  {
                    lat: 42.0030993,
                    lng: -5.6744946,
                  },
                  {
                    lat: 42.0031356,
                    lng: -5.6742347,
                  },
                  {
                    lat: 42.0031835,
                    lng: -5.6739892,
                  },
                  {
                    lat: 42.0030111,
                    lng: -5.6739076,
                  },
                  {
                    lat: 42.0028317,
                    lng: -5.6738617,
                  },
                  {
                    lat: 42.0026386,
                    lng: -5.6738800,
                  },
                  {
                    lat: 42.0024484,
                    lng: -5.6738758,
                  },
                  {
                    lat: 42.0022461,
                    lng: -5.6739283,
                  },
                  {
                    lat: 42.0020719,
                    lng: -5.6740300,
                  },
                  {
                    lat: 42.0018978,
                    lng: -5.6741072,
                  },
                  {
                    lat: 42.0017574,
                    lng: -5.6742714,
                  },
                  {
                    lat: 42.0016711,
                    lng: -5.6744848,
                  },
                  {
                    lat: 42.0014943,
                    lng: -5.6746134,
                  },
                  {
                    lat: 42.0013300,
                    lng: -5.6747210,
                  },
                  {
                    lat: 42.0011795,
                    lng: -5.6748797,
                  },
                  {
                    lat: 42.0010065,
                    lng: -5.6749962,
                  },
                  {
                    lat: 42.0008450,
                    lng: -5.6751194,
                  },
                  {
                    lat: 42.0006871,
                    lng: -5.6752576,
                  },
                  {
                    lat: 42.0005125,
                    lng: -5.6753934,
                  },
                  {
                    lat: 42.0003521,
                    lng: -5.6755321,
                  },
                  {
                    lat: 42.0001740,
                    lng: -5.6755997,
                  },
                  {
                    lat: 42.0000192,
                    lng: -5.6757263,
                  },
                  {
                    lat: 41.9998518,
                    lng: -5.6758551,
                  },
                  {
                    lat: 41.9996875,
                    lng: -5.6759580,
                  },
                  {
                    lat: 41.9995158,
                    lng: -5.6760551,
                  },
                  {
                    lat: 41.9993609,
                    lng: -5.6761923,
                  },
                  {
                    lat: 41.9991887,
                    lng: -5.6762681,
                  },
                  {
                    lat: 41.9990384,
                    lng: -5.6764257,
                  },
                  {
                    lat: 41.9988652,
                    lng: -5.6765251,
                  },
                  {
                    lat: 41.9986973,
                    lng: -5.6766431,
                  },
                  {
                    lat: 41.9985295,
                    lng: -5.6767481,
                  },
                  {
                    lat: 41.9983412,
                    lng: -5.6768263,
                  },
                  {
                    lat: 41.9982078,
                    lng: -5.6770132,
                  },
                  {
                    lat: 41.9980360,
                    lng: -5.6771059,
                  },
                  {
                    lat: 41.9978631,
                    lng: -5.6771727,
                  },
                  {
                    lat: 41.9977464,
                    lng: -5.6773664,
                  },
                  {
                    lat: 41.9977349,
                    lng: -5.6776271,
                  },
                  {
                    lat: 41.9977290,
                    lng: -5.6778822,
                  },
                  {
                    lat: 41.9977088,
                    lng: -5.6781282,
                  },
                  {
                    lat: 41.9976764,
                    lng: -5.6783772,
                  },
                  {
                    lat: 41.9975113,
                    lng: -5.6784860,
                  },
                  {
                    lat: 41.9973231,
                    lng: -5.6785363,
                  },
                  {
                    lat: 41.9971411,
                    lng: -5.6785352,
                  },
                  {
                    lat: 41.9969435,
                    lng: -5.6785393,
                  },
                  {
                    lat: 41.9967631,
                    lng: -5.6785814,
                  },
                  {
                    lat: 41.9965808,
                    lng: -5.6786131,
                  },
                  {
                    lat: 41.9963979,
                    lng: -5.6786569,
                  },
                  {
                    lat: 41.9962457,
                    lng: -5.6787889,
                  },
                  {
                    lat: 41.9960728,
                    lng: -5.6788561,
                  },
                  {
                    lat: 41.9958777,
                    lng: -5.6789551,
                  },
                  {
                    lat: 41.9957700,
                    lng: -5.6787559,
                  },
                  {
                    lat: 41.9959296,
                    lng: -5.6789130,
                  },
                  {
                    lat: 41.9959505,
                    lng: -5.6786723,
                  },
                  {
                    lat: 41.9958540,
                    lng: -5.6784505,
                  },
                  {
                    lat: 41.9958356,
                    lng: -5.6787904,
                  },
                  {
                    lat: 41.9958127,
                    lng: -5.6785077,
                  },
                  {
                    lat: 41.9958956,
                    lng: -5.6787287,
                  },
                  {
                    lat: 41.9959943,
                    lng: -5.6789704,
                  },
                  {
                    lat: 41.9961424,
                    lng: -5.6788086,
                  },
                  {
                    lat: 41.9963186,
                    lng: -5.6787218,
                  },
                  {
                    lat: 41.9964824,
                    lng: -5.6785968,
                  },
                  {
                    lat: 41.9966568,
                    lng: -5.6785035,
                  },
                  {
                    lat: 41.9968385,
                    lng: -5.6784428,
                  },
                  {
                    lat: 41.9970275,
                    lng: -5.6784574,
                  },
                  {
                    lat: 41.9972189,
                    lng: -5.6784729,
                  },
                  {
                    lat: 41.9973986,
                    lng: -5.6784603,
                  },
                  {
                    lat: 41.9975835,
                    lng: -5.6784322,
                  },
                  {
                    lat: 41.9977529,
                    lng: -5.6783441,
                  },
                  {
                    lat: 41.9979326,
                    lng: -5.6784244,
                  },
                  {
                    lat: 41.9981104,
                    lng: -5.6784751,
                  },
                  {
                    lat: 41.9982699,
                    lng: -5.6786225,
                  },
                  {
                    lat: 41.9984588,
                    lng: -5.6786499,
                  },
                  {
                    lat: 41.9986671,
                    lng: -5.6787169,
                  },
                  {
                    lat: 41.9988314,
                    lng: -5.6785475,
                  },
                  {
                    lat: 41.9989093,
                    lng: -5.6783241,
                  },
                  {
                    lat: 41.9991211,
                    lng: -5.6785104,
                  },
                  {
                    lat: 41.9993083,
                    lng: -5.6785509,
                  },
                  {
                    lat: 41.9994962,
                    lng: -5.6785500,
                  },
                  {
                    lat: 41.9996872,
                    lng: -5.6785428,
                  },
                  {
                    lat: 41.9998847,
                    lng: -5.6785051,
                  },
                  {
                    lat: 41.9997495,
                    lng: -5.6787726,
                  },
                  {
                    lat: 41.9999376,
                    lng: -5.6788028,
                  }
              ];
              var flightPath = new google.maps.Polyline({
                path: flightPlanCoordinates,
                geodesic: true,
                strokeColor: '#FF0000',
                strokeOpacity: 1.0,
                strokeWeight: 2
              });

              flightPath.setMap(map);
            }
        </script>
        <!-- Aqui iria nuestra api key que obtendremos de https://console.developers.google.com -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC7Tp1ye5Pssj78fx14tTQsssXN8S-wHnc&callback=initMap" async defer></script>
        <div id="map">
        </div>



        <canvas id="graficaH" width="1030" height="200">
            No se puede visualizar la gráfica
        </canvas>

        </div>
    </div>


</body></html>
