export DEBIAN_FRONTEND="noninteractive";
#update apt to get mysql repository
sudo apt-get update --assume-yes --force-yes
sudo apt-get upgrade --assume-yes --force-yes

#install mysql according to previous config
sudo -E apt-get install mysql-server --assume-yes --force-yes