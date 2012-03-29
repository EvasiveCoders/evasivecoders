cd $installdir
drush dl drupal
mv -f $installdir/drupal-7.0/* $installdir
rm -rf $installdir/drupal-7.0
mysql --user="$user" --password="$pass"
#cp $installdir/sites/default/default.settings.php $installdir/sites/default/settings.php
#Since we're gonna require drush, might as well do it all the way, right?
#mysql://$dbuser:$dbpass@$dblocation/$db
drush site-install standard --db-url=mysqli://$user:$pass@localhost/$dbname