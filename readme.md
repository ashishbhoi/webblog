<p align="center"><img src="https://www.abdevp.tk/favicon.png"></p>

## [Ashish Kumar Bhoi](https://www.abdevp.tk/?launcher=true) ##

## About This Website ##

- This website is all about my personal blogging project

## [Contact Me](https://www.abdevp.tk/contact) ##

## Modifications To Be made ##
1. '/.env' File
        
        APP_NAME="Blog | Ashish kumar Bhoi"
        APP_ENV=local
        APP_KEY=base64:yNeh5e4j4WYwHyHFS53wISni6E8RD389QR0gDXieRQM=
        APP_DEBUG=true
        APP_URL=https://www.abdevp.tk
        
        LOG_CHANNEL=stack
        
        DB_CONNECTION=mysql
        DB_HOST=abdevp.com
        DB_PORT=3306
        DB_DATABASE=abdevp_lsapp
        DB_USERNAME=abdevp_lsapp
        DB_PASSWORD=rVKDhaJpBeEI

2. '.htaccess' File

        #Force www:
        RewriteEngine on 
        RewriteCond %{HTTP_HOST} ^abdevp.tk [NC] 
        RewriteRule ^(.*)$ https://www.abdevp.tk/$1 [L,R=301,NC]
        
        #Force https
        RewriteEngine On
        RewriteCond %{HTTPS} off
        RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI}/$1 [L,R=301]
