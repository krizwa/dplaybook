#Deploy script
rsync -avz -e "ssh" ~/Sites/diageo/css/css root@playbook.sapient.com:/var/www/playbook/sites/all/themes/playbook/css

