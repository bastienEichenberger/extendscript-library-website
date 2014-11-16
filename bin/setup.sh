#!/bin/bash

#update
git reset --hard origin/master
git pull https://github.com/bastienEichenberger/extendscript-library-website.git

# Pull symfony components, clear caches and set rights
# remove the cache prod dir if neccessary
rm -rf /var/www/extendscript-library-website/app/cache

# install 
php app/console cache:clear --env=prod
php app/console assets:install web --symlink --env=prod
php app/console assetic:dump --env=prod

# commands
php app/console map:update
php app/console sitemap:generate

# set rights
chmod -R 777 /var/www/extendscript-library-website/app/cache
chmod -R 777 /var/www/extendscript-library-website/app/logs
chown -R www-data: /var/www/extendscript-library-website/web/*

#files data.json and coutries.json have to be edited
chown -R www-data: /var/www/extendscript-library-website/src/Jlfa/WebSiteBundle/Resources/public/data
