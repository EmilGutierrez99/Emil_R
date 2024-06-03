#!/bin/bash
#ubuntu 20.04

#definir los repositorios y todas las constantes
DIRECTORIO_HTML="/var/www/html"
DIRECTORIO_TEMPORAL="/var/www/temp" 
DIRECTORIO_TEMPORAL_GITHUB="/var/www/temp/Emil_R"


echo -e "\n\nUpdating Apt Packages and upgrading latest patches\n"
sudo apt-get update -y && sudo apt-get upgrade -y

#echo -e "\n\nInstalling Apache2 Web server\n"
#sudo apt update && sudo apt install apache2 -y

#echo -e "\n\nInstalling PHP & Requirements\n"
#sudo apt install -y php libapache2-mod-php -y
#sudo apt install php-curl php-gd php-json php-mbstring php-xml -y

echo -e "\n\nInstalling MySQL\n"
sudo apt install -y mysql-server 

echo -e "\n\nInstalling net-tools\n"
sudo apt install -y net-tools 

#seteando el espacio de trabajo
cd /var/ #cd /var/

#crear la carpeta www/html  verificar si existe primero sino crearla
echo -e "\n\nVerificacion de Directorios\n"
 if [ -d $DIRECTORIO_HTML ] 
then
    echo "El directorio $DIRECTORIO_HTML ya existe."
    echo -e "\n\nLimpiamos Directorio $DIRECTORIO_HTML \n"
    cd $DIRECTORIO_HTML/
     if [ "$(ls -A $DIRECTORIO_HTML)" ]; then #comprobar si el directorio esta vacio
        sudo rm -r *                        #SI NO ESTA VACIO BORRARLO
    else
        echo "$DIRECTORIO_HTML está vacío." #SI ESTA VACIO NO BORRARLO 
    fi  
else
    echo "El directorio $DIRECTORIO_HTML no existe. Creando..."
    sudo mkdir $DIRECTORIO_HTML
fi 


#crear un www temporal
echo -e "\n\nCreando directorio temporal\n"
sudo mkdir $DIRECTORIO_TEMPORAL

#clonar el repositorio de github en la carpeta temporal 
echo -e "\n\nClonamos repositorio de github\n"
cd $DIRECTORIO_TEMPORAL/
sudo git clone https://github.com/EmilGutierrez99/Emil_R.git

#hacer los checkouts de las ramas y actualizar ramas
echo -e "\n\nCambiamos de rama a la rama de desarrollo\n"
cd $DIRECTORIO_TEMPORAL_GITHUB/
sudo git checkout Actualizaciones
sudo git pull

echo -e "\n\nMovemos el contenido de la carpeta Emil_R a la carpeta html\n"

sudo mv CodigoFFin.php /var/www/html/index.php
sudo mv img /var/www/html/
sudo mv Datos_w.csv /var/www/html/
sudo mv new-email.html /var/www/html/

#una vez copiado todo, eliminamos la carpeta temporal
echo -e "\n\nEliminamos la carpeta temporal\n"
cd /var/www/
sudo rm -r temp

echo -e "\n\nFin\n"



