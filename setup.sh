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

mysql -u root -e "CREATE DATABASE sqli_login"
mysql -u root -e "CREATE USER'sqli_login'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_login. * TO 'sqli_login'@'localhost';"

mysql -u root -e "CREATE DATABASE sqli_union"
mysql -u root -e "CREATE USER'sqli_union'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_union.users TO 'sqli_union'@'localhost';"
mysql -u root -e "GRANT SELECT ON sqli_union.flag TO 'sqli_union'@'localhost';"

mysql -u root -e "CREATE USER'sqli_union_post'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_union.users  TO 'sqli_union_post'@'localhost';"
mysql -u root -e "GRANT SELECT ON sqli_union.flag2  TO 'sqli_union_post'@'localhost';"

mysql -u root -e "CREATE USER'sqli_cookie'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_union.users  TO 'sqli_cookie'@'localhost';"
mysql -u root -e "GRANT SELECT ON sqli_union.flagc4  TO 'sqli_cookie'@'localhost';"

mysql -u root -e "CREATE USER'sqli_jason'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_union.users  TO 'sqli_jason'@'localhost';"
mysql -u root -e "GRANT SELECT ON sqli_union.treasure  TO 'sqli_jason'@'localhost';"

mysql -u root -e "CREATE USER'sqli_or'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_union.users  TO 'sqli_or'@'localhost';"
mysql -u root -e "GRANT SELECT ON sqli_union.ironthrone  TO 'sqli_or'@'localhost';"


mysql -u root -e "CREATE USER'sqli_boundaries'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_union.users  TO 'sqli_boundaries'@'localhost';"
mysql -u root -e "GRANT SELECT ON sqli_union.limits  TO 'sqli_boundaries'@'localhost';"

mysql -u root -e "CREATE USER'sqli_csrf'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_union.users  TO 'sqli_csrf'@'localhost';"
mysql -u root -e "GRANT SELECT ON sqli_union.csrfFlag  TO 'sqli_csrf'@'localhost';"

mysql -u root -e "CREATE USER'sqli_os'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT SELECT ON sqli_union.users  TO 'sqli_os'@'localhost';"
mysql -u root -e "GRANT FILE ON sqli_union.users  TO 'sqli_os'@'localhost';"

echo '[mysqld]' >> /etc/mysql/my.cnf
echo 'secure_file_priv="/var/www/html/carpetaSecreta/"' >> /etc/mysql/my.cnf


mysql -u root -e "CREATE DATABASE sql_injection"

mysql -u root -p dump_completo.sql
mysql -u root -e "CREATE USER'sql_injection'@'localhost' IDENTIFIED BY 'contrafacil';"
mysql -u root -e "GRANT ALL PRIVILEGES ON * . * TO 'sql_injection'@'localhost';"


#<directory /var/www/html>
#                RewriteEngine  on
#                RewriteRule ^(lab)($|/) - [L]
#                RewriteRule ^(vuln)/([0-9]+)$ vuln.php?&id=$2 [L,QSA]
#        </directory>

