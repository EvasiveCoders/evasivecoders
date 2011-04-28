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
#######
echo "Welcome to Fetcher. Where do you want to go today?"
echo "Installation Directory (public_html):"
read installdir
echo "Database Name:"
read dbname
echo "Database User:"
read dbuser
echo "Database Pass:"
read dbpass
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
cp $installdir/sites/default/default.settings.php $installdir/sites/default/settings.php
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