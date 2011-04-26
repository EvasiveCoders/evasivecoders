#!/bin/sh

#For the love of god, please make sure this doesn't have write access.
options="\"Drupal 6\" \"Drupal 7\" \"Wordpress\""

echo "Welcome to Fetcher. Where do you want to go today?"
PS3="Please type the number corresponding to the installation you would like: "
select i in Drupal-6 Drupal-7 Wordpress-3.1.1 Quit
 do 
 [ $i = "Quit" ]  && exit 0
 echo "You chose $i"
done