#!/bin/bash

# Actualizar la lista de paquetes
sudo apt update -y

echo "Instalando Apache..."

# Instalar Apache
sudo apt install -y apache2

# Habilitar el servicio Apache para que arranque automáticamente al iniciar el sistema
sudo systemctl enable apache2

# Iniciar el servicio Apache
sudo systemctl start apache2

# Mostrar el estado del servicio Apache
sudo systemctl status apache2

echo "Apache se ha instalado y configurado correctamente de forma desatendida."