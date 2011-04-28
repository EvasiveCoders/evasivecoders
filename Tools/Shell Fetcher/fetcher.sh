#!/bin/sh

#For the love of god make sure this is only has read access.
options="\"Drupal 6\" \"Drupal 7\" \"Wordpress\""

echo "Welcome to Fetcher. Where do you want to go today?"
PS3="Please type the number corresponding to the installation you would like: "
select i in Drupal-6 Drupal-7 Wordpress-3.1.1 Quit
 do 
 [ $i = "Quit" ]  && exit 0
 echo "You chose $i"
>>>>>>> 0eed8b3f79d09b67c6c31ed7d63126f28f1c9ccf
done