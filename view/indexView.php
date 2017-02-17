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
    </script>
</head>
<body>
    <header>
        <button class="signinBT" onclick="identificarse()">Identificate</button><button class="signupBT" onclick="registrarse()">Regístrate Gratis</button>
    </header>
    <div id="signin">
        <form>
            <div class="close" onclick="closeIdentificarse()"><img width="25" height="25" src="webroot/img/close_btn.png"></div>
            <input type="text" name="usuario">
            <br>
            <input type="text" name="password">
            <div id="loginmsg"></div>
            <button>ENTRAR</button>
        </form>
    </div>
    <div id="signup">

        <form>
            <div class="close" onclick="closeRegistrarse()"><img width="25" height="25" src="webroot/img/close_btn.png"></div>
            <input type="text" name="usuario">
            <br>
            <input type="text" name="password">
                <input type="text" name="password">
                    <input type="text" name="password">
                        <input type="text" name="password">
                            <input type="text" name="password">
                                <input type="text" name="password">
            <div id="loginmsg"></div>
            <button>ENTRAR</button>
        </form>
    </div>


</body>
</html>
