<?php
    require_once ("../model/Usuario.php");

    $miUsuario = new Usuario("Heraclio", md5("paso"), "heraclioprofe@gmail.com", "Heraclio Borujo", "01/02/1964", 170, 70, "H", 1, null, null, null, null, null, null, null,null,null,10000,5,120,140,160,180,190,220);

    print_r($miUsuario);


    echo "<hr>";
    echo $miUsuario->__get(fechaNac);
    $miUsuario->__set(fechaNac, "02/02/1980");
    echo $miUsuario->__get(fechaNac);


 ?>
