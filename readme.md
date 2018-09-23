<p align="center"><img src="https://www.abdevp.tk/favicon.png"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/AshishBhoi/webblog.svg?branch=master"></a>
<a href="https://packagist.org/packages/ashishbhoi/webblog"><img src="https://poser.pugx.org/ashishbhoi/webblog/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/ashishbhoi/webblog"><img src="https://poser.pugx.org/ashishbhoi/webblog/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/ashishbhoi/webblog"><img src="https://poser.pugx.org/ashishbhoi/webblog/license.svg" alt="License"></a>
</p>

## About This Website ##

- This website is all about my personal blogging project

## [Contact Me](https://www.abdevp.tk/contact) ##


## Files To Be Copied ##
1. Download 'laravel.zip'
2. Download 'public.zip'

## Setup Process ##
1. Decompress 'public.zip' in your 'public_html' folder
2. Decompress 'laravel.zip' in some directory which is not assessable by web.

## Modifications To Be made ##
1. rename '/.env.example' to '/.env'
2. edit to your taste '.htaccess' File
3. edit '/config/mail.php'
4. edit '/public/index.php' 
5. 'storage link'

        $ ln -s ~/<Location Of Project>/storage/app/public ~/<Location Of Project>/public/storage
6. 'iniciate composer'

        $ composer install
        $ composer dumpautoload -o
        $ composer install --optimize-autoloader --no-dev
7. 'laravel command'

        $ php artisan config:cache
        $ php artisan route:cache
8. 'ckeditor'
        
        $ php artisan vendor:publish --tag=ckeditor
