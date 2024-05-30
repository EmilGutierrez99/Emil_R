#!/bin/bash
#ubuntu 20.04

#definir los repositorios y todas las constantes

echo -e "\n\nUpdating Apt Packages and upgrading latest patches\n"
sudo apt-get update -y && sudo apt-get upgrade -y

echo -e "\n\nInstalling Apache2 Web server\n"
sudo apt update && sudo apt install apache2 -y

echo -e "\n\nInstalling PHP & Requirements\n"
sudo apt install -y php libapache2-mod-php -y
sudo apt install php-curl php-gd php-json php-mbstring php-xml -y

echo -e "\n\nInstalling MySQL\n"
sudo apt install mysql-server php-mysql -y

#seteando el espacio de trabajo
cd /var/ #cd /var/

#crear la carpeta www/html  verificar si existe primero sino crearla
echo -e "\n\nVerificacion de Directorios\n"
 if [ -d "/var/www/html" ] 
then
    echo "El directorio /var/www/html ya existe."
else
    echo "El directorio /var/www no existe. Creando..."
    sudo mkdir /var/www/html
fi 
#crear un www temporal
sudo mkdir /var/www/temp

#clonar el repositorio de github en la carpeta temporal 
echo -e "\n\nClonamos repositorio de github\n"
cd /var/www/temp/
git clone https://github.com/EmilGutierrez99/Emil_R.git

#hacer los checkouts de las ramas y actualizar ramas
echo -e "\n\nCambiamos de rama a la rama de desarrollo\n"
cd Emil_R/
git checkout Actualizaciones
git pull

cd /var/

#copiamos el contenido de la carpeta temporal a la carpeta html
echo -e "\n\nCopiamos el contenido de la carpeta temporal a la carpeta html\n"
sudo cp -r  /var/www/temp/ /var/www/html/



#una vez copiado todo, eliminamos la carpeta temporal
echo -e "\n\nEliminamos la carpeta temporal\n"
sudo rm -r /var/www/temp

#cd ..
#cd ..
#cd /var/www/html/Emil_R/
#git checkout Actualizaciones
#git pull
