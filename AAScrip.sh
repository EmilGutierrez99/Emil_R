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

 if [ -d "/var/www/html" ] #crear la carpeta www/html  verificar si existe primero sino crearla
then
    echo "El directorio /var/www/html ya existe."
else
    echo "El directorio /var/www no existe. Creando..."
    sudo mkdir /var/www/html
fi #crear la carpeta www/html  verificar si existe primero sino crearla

#crear un www temporal
#clonar el repositorio de github en la carpeta temporal www
#hacer los checkouts de las ramas y actualizar ramas
#copiamos el contenido de la carpeta temporal a la carpeta html
#una vez copiado todo, eliminamos la carpeta temporal

echo -e "\n\nClonamos repositorio de github\n"
git clone https://github.com/EmilGutierrez99/Emil_R.git

echo -e "\n\nCambiamos de rama a la rama de desarrollo\n"
cd Emil_R
git checkout Actualizaciones
git pull

cd ..

echo -e "\n\nMovemos el directorio a la ruta /var/www/html/\n"
sudo mv Emil_R /var/www/html/

#cd ..
#cd ..
#cd /var/www/html/Emil_R/
#git checkout Actualizaciones
#git pull
