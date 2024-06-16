#!/bin/bash
REPOSITORIO_GITHUB1="https://github.com/EmilGutierrez99/Emil_R.git"
DIRECTORIO_TEMPORAL_GITHUB1="/home/user/temporal/Emil_R"
DIR_TEMPORAL="/home/user/temporal"
DIR_USER="/home/user"

#crear un www temporal
echo -e "\n\nCreando directorio temporal\n"
sudo mkdir $DIR_TEMPORAL

#clonar el repositorio de github en la carpeta temporal 
echo -e "\n\nClonamos repositorio de github\n"
cd $DIR_TEMPORAL/
sudo git clone $REPOSITORIO_GITHUB1

#hacer los checkouts de las ramas y actualizar ramas
echo -e "\n\nCambiamos de rama a la rama de desarrollo\n"
cd $DIRECTORIO_TEMPORAL_GITHUB1/
sudo git checkout Actualizaciones
sudo git pull

echo -e "\n\nMovemos el contenido de la carpeta Emil_R a la carpeta html\n"

sudo mv APACHE_Scrip.sh $DIR_USER/
sudo mv PHP_Scrip.sh $DIR_USER/


#una vez copiado todo, eliminamos la carpeta temporal
echo -e "\n\nEliminamos la carpeta temporal\n"
cd $DIR_USER/
sudo rm -r temporal

echo -e "\n\nFin\n"

# Actualizar la lista de paquetes
sudo apt update -y

echo "MySQL instalando.."
# Instalar debconf-utils para preconfigurar la instalación
sudo apt install -y debconf-utils

# Configurar las respuestas para la instalación de MySQL
DB_ROOT_PASSWORD="password"
echo "mysql-server mysql-server/root_password password $DB_ROOT_PASSWORD" | sudo debconf-set-selections
echo "mysql-server mysql-server/root_password_again password $DB_ROOT_PASSWORD" | sudo debconf-set-selections

# Instalar MySQL Server
sudo apt install -y mysql-server

echo "MySQL se ha instalado y configurado correctamente de forma desatendida."


echo "Instalando Apache..."

cd $DIR_USER/
chmod +x APACHE_Scrip.sh
./APACHE_Scrip.sh

cd $DIR_USER/
chmod +x PHP_Scrip.sh
./PHP_Scrip.sh