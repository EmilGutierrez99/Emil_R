#!/bin/bash

# Nombre del archivo CSV
read -p "Introduce el nombre del archivo: " filename
read -p "Introduce el numero de repeticiones del bucle/cantidad colores background: " b


# Escribir la cabecera del CSV
echo "Nombre, Edad, Celular,  Correo, Color" > "$filename"

# Bucle para generar 60 filas de datos en el CSV
for ((i=1; i<=$b; i++))
do
    echo "Nombre$i, $i, $i$i$i$i, Correo$i@gmail.com, hsl($i, 100%, 50%)" >> "$filename"
done

echo "¡Archivo CSV '$filename' con 60 filas creado exitosamente!"

#capturar en nombre por del fichero por consola  sh srcip.sh ejemplo.csv, 60  cambiar el nombre del archivo y intodrucir el numero del bucle