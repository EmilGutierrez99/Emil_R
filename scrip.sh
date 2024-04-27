#!/bin/bash

# Nombre del archivo CSV
filename="ejemplo.csv"

# Escribir la cabecera del CSV
echo "Nombre, Edad, Celular,  Correo" > "$filename"

# Bucle para generar 60 filas de datos en el CSV
for ((i=1; i<=60; i++))
do
    echo "Nombre$i, $i, $i$i$i$i, Correo$i@gmail.com" >> "$filename"
done

echo "¡Archivo CSV '$filename' con 60 filas creado exitosamente!"