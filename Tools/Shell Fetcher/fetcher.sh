#!/bin/sh
#For the love of god make sure this is only has read access.
#
#
#Set Version Veriables here for easy updating -- no spaces!
D6="Drupal-6.20"
D7="Drupal-7.0"
WP="Wordpress-Latest"
##URLS
D6DL="http://ftp.drupal.org/files/projects/drupal-6.20.tar.gz"
D7DL="http://ftp.drupal.org/files/projects/drupal-7.0.tar.gz"
WPDL="http://wordpress.org/latest.tar.gz"
dblocation=${1:-DEFAULTVALUE}
#######
echo "Welcome to Fetcher. Where do you want to go today?"
read -p "Installation Directory (public_html): " installdir
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
# Drupal 7
elif [ $i = $D7 ];
then
cd $installdir
drush dl drupal
mv -f $installdir/drupal-7.0/* $installdir
rm -rf $installdir/drupal-7.0
mysql --user="$user" --password="$pass"
#cp $installdir/sites/default/default.settings.php $installdir/sites/default/settings.php
#Since we're gonna require drush, might as well do it all the way, right?
drush site-install standard --db-url=mysqli://$user:$pass@localhost/$dbname
echo "Oh yeah"
# Drupal 6
elif [ $i = $D6 ];
then
echo "Oh yeah"
# Wordpress
elif [ $i = $WP ];
then
echo "Oh yeah"
fi
done