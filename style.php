<?php

$archivo = fopen("archivo.csv", 'r');

     $numlinea = 0; // Initialize the line counter

     while ($linea = fgets($archivo)) {
          $numlinea++;
          if(date("s") >= 0 and date("s") <= 20){
               $numlinea == 2;
          

                if ($numlinea == 2) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}

          if(date("s") >= 21 and date("s") <= 40){
               $numlinea == 3;
          
     
               if ($numlinea == 3) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") >= 41 and date("s") <= 59){
               $numlinea == 4;
                    
          
               if ($numlinea == 4) { // fija el valor en la primera linea
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
    
    background-color: ;
    background-image: url("img/natura.png") ;
    background-repeat: no-repeat;
    background-position: right top;
    background-attachment: scroll;
}
