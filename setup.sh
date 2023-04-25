apt update

apt install -y zip unzip
apt install -y \
	php \
	php-cgi \
	php-cli \
	php-common \
	php-curl \
	php-dev \
	php-json \
	php-mbstring \
	php-mysql \
	php-odbc \
	php-phpdbg \
	php-sqlite3
apt install apache2 libapache2-mod-php -y
apt install mariadb-common mariadb-server mariadb-client -y
apt install -y dos2unix
apt install -y netcat-traditional

apt install iputils-ping -y
apt install wget -y
apt install net-tools -y

a2enmod rewrite

chown -R www-data:www-data /var/www/html

rm /var/www/html/index.html
cp -R app/* /var/www/html/

