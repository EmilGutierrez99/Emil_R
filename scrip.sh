#!/bin/bash

# Nombre del archivo CSV
read -p "Introduce el nombre del archivo: " filename
read -p "Introduce el numero de repeticiones del bucle: " b


# Escribir la cabecera del CSV
echo "NAME,OCCUPATION,PHOTO,ME,CONT_ME,CONTACT,PHONE,ADDRESS,EMAIL,EXPERIENCE,TIME_EXP1,EXP1_TITLE,EXP1_DESC,TIME_EXP2,EXP2_TITLE,EXP2_DESC,EDUCATION,TIME_EDU1,EDU1_TITLE,EDU1_DESC,TIME_EDU2,EDU2_TITLE,EDU2_DESC,SKILLS,SKILL1,SKILL2,SKILL3,SKILL4,ADD_SKILLS,ADD_SKILL1,ADD_SKILL2,ADD_SKILL3,ADD_SKILL4" > "$filename"

# Bucle para generar 60 filas de datos en el CSV
for ((i=1; i<=$b; i++))
do
    echo "NAME$i,OCCUPATION$i,img/foto$i.jpg,ME$i,CONT_ME$i,CONTACT$i,PHONE$i,ADDRESS$i,EMAIL$i,EXPERIENCE$i,TIME_EXP1$i,EXP1_TITLE$i,EXP1_DESC$i,TIME_EXP2$i,EXP2_TITLE$i,EXP2_DESC$i,EDUCATION$i,TIME_EDU1$i,EDU1_TITLE$i,EDU1_DESC$i,TIME_EDU2$i,EDU2_TITLE$i,EDU2_DESC$i,SKILLS$i,SKILL1$i,SKILL2$i,SKILL3$i,SKILL4$i,ADD_SKILLS$i,ADD_SKILL1$i,ADD_SKILL2$i,ADD_SKILL3$i,ADD_SKILL4$i" >> "$filename"
done

echo "¡Archivo CSV '$filename' con $b filas creado exitosamente!"

#capturar en nombre por del fichero por consola  sh srcip.sh ejemplo.csv, 60  cambiar el nombre del archivo y intodrucir el numero del bucle