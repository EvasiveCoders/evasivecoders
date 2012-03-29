#!/bin/sh
#Include Variables
source fetcher/includes.sh
#######
echo "Welcome to Fetcher. Where do you want to go today?"
read -p "Installation Directory (public_html): " installdir
installdir=${installdir:-test}
read -p "Linux Username: " user
read -p "Linux User's Password: " pass
read -p "MySQL Location (leave blank for localhost): " dblocation
dblocation=${dblocation:-localhost}
read -p "Database Name: " dbname
read -p "Database User: " dbuser
read -p "Database Password: " dbpass
PS3="Please type the number corresponding to the installation you would like: "
select i in $D6 $D7 $WP Quit
do 
if [ $i = "Quit" ];
then
exit
# Drupal
elif [ $i = $D7 ] || [ $i = $D6 ];
then
source fetcher/drupal.sh
# Wordpress
elif [ $i = $WP ];
then
source fetcher/wordpress.sh
fi
echo "Installation Information"
echo "Installation Directory: $installdir"
echo "Linux Username: $user"
echo "Linux User's Password: $pass"
echo "SQL Location: $dblocation"
echo "Database Name: $dbname"
echo "Database User: $dbuser"
echo "Database Password: $dbpass"

done