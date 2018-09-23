<p align="center"><img src="https://www.abdevp.tk/favicon.png"></p>

[![Latest Stable Version](https://poser.pugx.org/ashishbhoi/webblog/version)](https://github.com/AshishBhoi/webblog/releases)
[![Total Downloads](https://poser.pugx.org/ashishbhoi/webblog/downloads)](https://github.com/AshishBhoi/webblog/releases)
[![Latest Unstable Version](https://poser.pugx.org/ashishbhoi/webblog/v/unstable)](https://github.com/AshishBhoi/webblog/releases)
[![License](https://poser.pugx.org/ashishbhoi/webblog/license)](https://github.com/AshishBhoi/webblog/blob/master/LICENSE)

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


