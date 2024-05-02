<html>
     
     <head>
          <title>Curriculum</title>
          <link rel = "stylesheet" href="stilo_natura.css">
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
    