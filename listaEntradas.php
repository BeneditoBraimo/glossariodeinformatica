<?php
        
        require_once'api/Entrada.php';
        require 'connectionSettings\DBConnectionSetting.php';
        /*if(mysqli_ping($conexao)){
            echo 'MySQL Server'. mysqli_get_server_info($conexao);
        }*/
        $entrada = new glossariodeinformatica\Entrada();
        
        foreach(range('A', 'Z') as $letra){
            echo"<p>".$letra."</p>";

        }
        
    
    