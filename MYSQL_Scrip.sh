#!/bin/bash

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

# Habilitar el servicio MySQL para que arranque automáticamente al iniciar el sistema
sudo systemctl enable mysql

# Iniciar el servicio MySQL
sudo systemctl start mysql

# Mostrar el estado del servicio MySQL
sudo systemctl status mysql

echo "MySQL se ha instalado y configurado correctamente de forma desatendida."