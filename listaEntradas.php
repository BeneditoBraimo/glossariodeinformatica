<?php
        
        require_once'api/Entrada.php';
        $entrada = new glossariodeinformatica\Entrada();
        $letra = array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'X', 'Y', 'Z');
        foreach(range('A', 'Z') as $letra){
            echo"<p>".$letra."</p>";

        }
        
    
    