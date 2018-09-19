<p align="center"><img src="https://www.abdevp.tk/favicon.png"></p>

## [Ashish Kumar Bhoi](https://www.abdevp.tk/?launcher=true) ##

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
7. 'laravel command'

        $ php artisan config:cache
8. 'ckeditor'
        
        $ php artisan vendor:publish --tag=ckeditor
