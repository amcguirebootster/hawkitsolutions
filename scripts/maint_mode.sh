#!/bin/bash
if [ "$1" == "" ]
then
  echo "1 - to enable maintance mode"
  echo "0 - to disable maintance mode"
fi
if [ "$1" == "1" ]
then
  mv -v /var/www/html/hawkitsolutions/public/index.html /var/www/html/hawkitsolutions/public/index.html.disabled
  cp -v /var/www/html/hawkitsolutions/public/coming-soon.html /var/www/html/hawkitsolutions/public/index.html
  echo "Maint mode enabled"
fi
if [ "$1" == "2" ]
then
  mv -v /var/www/html/hawkitsolutions/public/index.html.disabled /var/www/html/hawkitsolutions/public/index.html
  echo "Maint mode disabled"
fi
