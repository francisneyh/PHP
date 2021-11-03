<?php
//comando condicional switch
    $parametro = 'a';
    
    switch($parametro)
    {
     
        case 1:
            echo "case 1";
            break;
        
        case 2:
            echo "case 2";
            break;
        
        case 'a':
            echo "case a";
            break;
            
            case true: 
            echo "case true";
            break;
            
        case false:
            echo "case false";
            break;
        
        default:
            echo "entrou no default";
            break;
            
    }
?>
