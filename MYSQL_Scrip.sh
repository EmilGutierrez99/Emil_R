#!/bin/bash
REPOSITORIO_GITHUB="https://github.com/EmilGutierrez99/Emil_R.git"

echo "Movemos el contenido de la carpeta Emil_R a la carpeta html"

sudo mv CodigoFFin.php $DIRECTORIO_HTML/index.php
sudo mv img $DIRECTORIO_HTML/
sudo mv Datos_w.csv $DIRECTORIO_HTML/
sudo mv new-email.html $DIRECTORIO_HTML/
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
directorio_apache="/home/user/"

cd $directorio_apache
chmod +x APACHE_Scrip.sh
./APACHE_Scrip.sh