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
        
        MAIL_DRIVER=smtp
        MAIL_HOST=mail.abdevp.tk
        MAIL_PORT=465
        MAIL_USERNAME="noreply@abdevp.tk"
        MAIL_PASSWORD="cWbr0AIJ#BHa"
        MAIL_ENCRYPTION=ssl

2. '.htaccess' File

        #Force www:
        RewriteEngine on 
        RewriteCond %{HTTP_HOST} ^abdevp.tk [NC] 
        RewriteRule ^(.*)$ https://www.abdevp.tk/$1 [L,R=301,NC]
        
        #Force https
        RewriteEngine On
        RewriteCond %{HTTPS} off
        RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI}/$1 [L,R=301]

3. '/config/mail.php'

        'driver' => env('MAIL_DRIVER', 'smtp'),
        'host' => env('MAIL_HOST', 'mail.abdevp.tk'),
        'port' => env('MAIL_PORT', 465),
            'from' => [
                'address' => env('MAIL_FROM_ADDRESS', 'noreply@abdevp.tk'),
                'name' => env('MAIL_FROM_NAME', 'no-reply | Abdevp'),
            ],
        'encryption' => env('MAIL_ENCRYPTION', 'ssl'),
