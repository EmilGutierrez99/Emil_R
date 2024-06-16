#!/bin/bash

# Actualizar lista de paquetes
sudo apt-get update -y 

# Actualizar y mejorar todos los paquetes
sudo apt-get upgrade -y 

#Mysql
#############################################

echo "MySQL instalando.."
# Instalar debconf-utils para preconfigurar la instalación
sudo apt-get install -y debconf-utils 

# Configurar las respuestas para la instalación de MySQL
DB_ROOT_PASSWORD="password"
echo "mysql-server mysql-server/root_password password $DB_ROOT_PASSWORD" | sudo debconf-set-selections
echo "mysql-server mysql-server/root_password_again password $DB_ROOT_PASSWORD" | sudo debconf-set-selections

# Instalar MySQL Server
sudo apt-get install -y mysql-server 

# Habilitar el servicio MySQL para que arranque automáticamente al iniciar el sistema
#sudo systemctl enable mysql

# Iniciar el servicio MySQL
#sudo systemctl start mysql

# Mostrar el estado del servicio MySQL
#sudo systemctl status mysql

echo "MySQL se ha instalado y configurado correctamente de forma desatendida."

#############################################

# Apache
#############################################

echo "Instalando Apache..."

# Instalar Apache
sudo apt-get install -y apache2 

#verificamos version
#sudo apache2 -v

echo "Apache se ha instalado y configurado correctamente de forma desatendida."

#############################################

# PHP
#############################################

# Instalar PHP junto con algunas extensiones comunes
sudo apt-get install -y php libapache2-mod-php php-mysql php-cli php-curl php-zip php-gd php-mbstring php-xml 

# Verificar la versión de PHP instalada
#sudo php -v

echo "PHP se ha instalado y configurado correctamente de forma desatendida."

#############################################





#definir los repositorios y todas las constantes
DIRECTORIO_HTML="/var/www/html"
DIRECTORIO_TEMPORAL="/var/www/temp" 
DIRECTORIO_TEMPORAL_GITHUB="/var/www/temp/Emil_R"
DIRECTORIO_WWW="/var/www"
DIRECTORIO_ORIGEN="/var"
REPOSITORIO_GITHUB="https://github.com/EmilGutierrez99/Emil_R.git"





#echo -e "\n\nInstalling net-tools\n"
#sudo apt install -y net-tools 

#seteando el espacio de trabajo
cd $DIRECTORIO_ORIGEN/ #cd /var/

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
sudo git clone $REPOSITORIO_GITHUB

#hacer los checkouts de las ramas y actualizar ramas
echo -e "\n\nCambiamos de rama a la rama de desarrollo\n"
cd $DIRECTORIO_TEMPORAL_GITHUB/
sudo git checkout Actualizaciones
sudo git pull

echo -e "\n\nMovemos el contenido de la carpeta Emil_R a la carpeta html\n"

sudo mv CodigoFFin.php $DIRECTORIO_HTML/index.php
sudo mv img $DIRECTORIO_HTML/
sudo mv Datos_w.csv $DIRECTORIO_HTML/
sudo mv new-email.html $DIRECTORIO_HTML/

#una vez copiado todo, eliminamos la carpeta temporal
echo -e "\n\nEliminamos la carpeta temporal\n"
cd $DIRECTORIO_WWW/
sudo rm -r temp

echo -e "\n\nFin\n"




