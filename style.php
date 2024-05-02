<?php

$archivo = fopen("archii.csv", 'r');

     $numlinea = 0; // Initialize the line counter

     while ($linea = fgets($archivo)) {
          
          if(date("s") == 2){
               $numlinea = 2;
          

                if ($numlinea == 2) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}

          if(date("s") == 3){
               $numlinea = 3;
          
     
               if ($numlinea == 3) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 4){
               $numlinea = 4;
                    
          
               if ($numlinea == 4) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 5){
               $numlinea = 5;
                              
                    
               if ($numlinea == 5) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                                   
                    }}


          if(date("s") == 6){
               $numlinea = 6;
                              
                    
               if ($numlinea == 6) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                                   
                              }}
          if(date("s") == 7){
                $numlinea = 7;
                                        
                              
               if ($numlinea == 7) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                                             
                              }}

          if(date("s") == 8){
               $numlinea = 8;
                                                           
                                                 
               if ($numlinea == 8) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                                                                
                              }}
               
          if(date("s") == 9){
               $numlinea = 9;
                                                                          
                                                                
               if ($numlinea == 9) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                                                                               
                              }}

          if(date("s") == 10){
               $numlinea = 10;
                                                                                              
                                                                                    
               if ($numlinea == 10) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                                                                                                   
                     }}

         
    }        

    fclose($archivo);
          

?>

.titulo{
    font-family: "Raleway", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
    
    color: green;
}
body{
    font-family: "Raleway", sans-serif;
    font-optical-sizing: auto;
    font-style: normal;
    
    background-color: <?php echo $datos[8]; ?>;
    background-image: url("img/natura.png") ;
    background-repeat: no-repeat;
    background-position: right top;
    background-attachment: scroll;
}
