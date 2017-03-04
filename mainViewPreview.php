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

    <div id="flexContainer">
        <div id="menuizq">
            <span id="closeIzq" onclick="$('#menuizq').css('left','-300px');">&#10006 </span>
            <br>
            <div id="foto">IMAGEN</div>
            <div id="nombre">Nombre Completo</div>
            <div id="calendario">Calendario</div>
            <div id="opciones">
                <ul>
                    <li>Subir Track</li>
                    <li>Ver estadisticas</li>
                    <li>Configuración</li>
                </ul>
            </div>

            <br>

        </div>
    </div>

    <div id="menuder">

        <p onclick="$('#menuder').css('right','-300px');">Cerrar </p>

        <canvas id="graficaDer" width="300" height="300">
        </canvas>
        <div class="leyenda"><img src="webroot/img/distancia.png">Distancia </div>
        <div class="leyenda"><img src="webroot/img/calorias.png">Calorias</div>
        <div class="leyenda"><img src="webroot/img/pulsaciones.png">Pulsaciones</div>
        <div class="leyenda"><img src="webroot/img/velocidad.png">Velocidad</div>


        <script>
        function initMap() {
              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 3,
                center: {lat: 0, lng: -180},
                mapTypeId: google.maps.MapTypeId.TERRAIN
              });

              var flightPlanCoordinates = [
                {lat: 37.772, lng: -122.214},
                {lat: 21.291, lng: -157.821},
                {lat: -18.142, lng: 178.431},
                {lat: -27.467, lng: 153.027}
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
    </div>
    <div id="contenido">
        <header>
            <img id="botonUsuario" src="webroot/img/menuizqicon.png" onclick="$('#menuizq').css('left','0px');" alt="Abrir menu de usuario">
            <div id="titulo">DiwTrack</div>
            <button id="botonDetalle" onclick="$('#menuder').css('right','0');">Abrir detalle</button>
        </header>
        <div id="map">
        </div>


        <canvas id="graficaH" width="1030" height="230">
        </canvas>

    </div>


</body></html>
