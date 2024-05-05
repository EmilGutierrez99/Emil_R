<html>
     
     <head>
          <title>Curriculum</title>
          
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
          <link rel = "stylesheet" href="style.php">
    </head>
     <body>

     <?php 

     $persona_nombre = "nombre";
     $persona_edad = "edad";
     $persona_celular = "celular";
     $persona_correo = "correo";
     $persona_rutaFoto = 0;
     
     
     
     $archivo = fopen("archii.csv", 'r');

     $numlinea = 0; // Initialize the line counter
     
     while ($linea = fgets($archivo)) {
          $numlinea++;
          if(date("s") == 0){
               $numlinea == 2;
          
     
                if ($numlinea == 2) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 1){
               $numlinea == 3;
          
     
               if ($numlinea == 3) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 2){
               $numlinea == 4;
                    
          
               if ($numlinea == 4) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 3){
               $numlinea == 5;
          
     
                if ($numlinea == 5) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 4){
               $numlinea == 6;
          
     
               if ($numlinea == 6) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 5){
               $numlinea == 7;
                    
          
               if ($numlinea == 7) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 6){
               $numlinea == 8;
          
     
                if ($numlinea == 8) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 7){
               $numlinea == 9;
          
     
               if ($numlinea == 9) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 8){
               $numlinea == 10;
                    
          
               if ($numlinea == 10) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 9){
               $numlinea == 11;
          
     
                if ($numlinea == 11) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 10){
               $numlinea == 12;
          
     
               if ($numlinea == 12) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 11){
               $numlinea == 13;
                    
          
               if ($numlinea == 13) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 12){
               $numlinea == 14;
          
     
                if ($numlinea == 14) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 13){
               $numlinea == 15;
          
     
               if ($numlinea == 15) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 14){
               $numlinea == 16;
                    
          
               if ($numlinea == 16) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 15){
               $numlinea == 17;
          
     
                if ($numlinea == 17) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 16){
               $numlinea == 18;
          
     
               if ($numlinea == 18) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 17){
               $numlinea == 19;
                    
          
               if ($numlinea == 19) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
          }}
          if(date("s") == 18){
               $numlinea == 20;
          
     
                if ($numlinea == 20) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 19){
               $numlinea == 21;
          
     
               if ($numlinea == 21) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 20){
               $numlinea == 22;
                    
          
               if ($numlinea == 22) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 21){
               $numlinea == 23;
          
     
                if ($numlinea == 23) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 22){
               $numlinea == 24;
          
     
               if ($numlinea == 24) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 23){
               $numlinea == 25;
                    
          
               if ($numlinea == 25) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 24){
               $numlinea == 26;
          
     
                if ($numlinea == 26) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 25){
               $numlinea == 27;
          
     
               if ($numlinea == 27) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 26){
               $numlinea == 28;
                    
          
               if ($numlinea == 28) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
          }}
          if(date("s") == 27){
               $numlinea == 29;
          
     
                if ($numlinea == 29) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 28){
               $numlinea == 30;
          
     
               if ($numlinea == 30) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 29){
               $numlinea == 31;
                    
          
               if ($numlinea == 31) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 30){
               $numlinea == 32;
          
     
                if ($numlinea == 32) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 31){
               $numlinea == 33;
          
     
               if ($numlinea == 33) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 32){
               $numlinea == 34;
                    
          
               if ($numlinea == 34) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 33){
               $numlinea == 35;
          
     
                if ($numlinea ==35) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 34){
               $numlinea == 36;
          
     
               if ($numlinea == 36) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 35){
               $numlinea == 37;
                    
          
               if ($numlinea == 37) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
          }}
          if(date("s") == 36){
               $numlinea == 38;
          
     
                if ($numlinea == 38) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 37){
               $numlinea == 39;
          
     
               if ($numlinea == 39) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 38){
               $numlinea == 40;
                    
          
               if ($numlinea == 40) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 39){
               $numlinea == 41;
          
     
                if ($numlinea == 41) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 40){
               $numlinea == 42;
          
     
               if ($numlinea == 42) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 41){
               $numlinea == 43;
                    
          
               if ($numlinea == 43) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 42){
               $numlinea == 44;
          
     
                if ($numlinea == 44) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 43){
               $numlinea == 45;
          
     
               if ($numlinea == 45) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 44){
               $numlinea == 46;
                    
          
               if ($numlinea == 46) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
          }}
          if(date("s") == 45){
               $numlinea == 47;
          
     
                if ($numlinea == 47) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 46){
               $numlinea == 48;
          
     
               if ($numlinea == 48) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 47){
               $numlinea == 49;
                    
          
               if ($numlinea == 49) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 48){
               $numlinea == 50;
          
     
                if ($numlinea == 50) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 49){
               $numlinea == 51;
          
     
               if ($numlinea == 51) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 50){
               $numlinea == 52;
                    
          
               if ($numlinea == 52) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 51){
               $numlinea == 53;
          
     
                if ($numlinea == 53) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 52){
               $numlinea == 54;
          
     
               if ($numlinea == 54) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 53){
               $numlinea == 55;
                    
          
               if ($numlinea == 55) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 54){
               $numlinea == 56;
                    
          
               if ($numlinea == 56) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 55){
               $numlinea == 57;
          
     
                if ($numlinea == 57) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 56){
               $numlinea == 58;
          
     
               if ($numlinea == 58) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                    
          if(date("s") == 57){
               $numlinea == 59;
                    
          
               if ($numlinea == 59) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                         
                    }}
          if(date("s") == 58){
               $numlinea == 60;
          
     
                if ($numlinea == 60) { // fija el valor en la primera linea
                     $datos = explode(',', $linea); // explorar en linea hasta ','
                         echo $datos[0]; // salida del dato en celda 0
                         
               }}
     
          if(date("s") == 59){
               $numlinea == 61;
          
     
               if ($numlinea == 61) { // fija el valor en la primera linea
                    $datos = explode(',', $linea); // explorar en linea hasta ','
                    echo $datos[0]; // salida del dato en celda 0
                    
                    }} 
                                   
     }        
     
     fclose($archivo); 
     ?>
          <h1 class="titulo">Imagen</h1>
          <img src= "<?php echo $datos[7];  ?>" alt= "foto" title= "foto persona" width= "200" height= "200"/>
          
          <h1 class="titulo">Datos personales</h1>
          <h2>Nombre: <?php echo $datos[0];  ?></h2>
          <h2>Edad: <?php echo $datos[1];  ?></h2>
          <h2>Celular: <?php echo $datos[2];  ?></h2>
          <h2>Correo: <?php echo $datos[3];  ?></h2>

          <h1 class="titulo">Formacion Academica</h1>
          <h2>Estudios nivel basico:<?php echo $datos[4];  ?> </h2>
          <h2>Estudios nivel Tecnico:<?php echo $datos[5];  ?> </h2>

          <h1 class="titulo">Cursos Realizados</h1>
          <h2>Curso de:<?php echo $datos[6];  ?> </h2>
          


          
          <br >
          <?php echo date ("D d F H:i:s");  ?>

          
     </body>




</html>
    