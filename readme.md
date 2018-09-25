[![AB Developers](https://www.abdevp.tk/favicon.png)](https://www.abdevp.tk)
[![Build Status](https://travis-ci.org/AshishBhoi/webblog.svg?branch=master)](https://travis-ci.org/AshishBhoi/webblog)
[![GitHub issues](https://img.shields.io/github/issues/AshishBhoi/webblog.svg)](https://github.com/AshishBhoi/webblog/issues)
[![GitHub license](https://img.shields.io/github/license/AshishBhoi/webblog.svg)](https://github.com/AshishBhoi/webblog/blob/master/LICENSE)
[![GitHub release](https://img.shields.io/github/release/ashishbhoi/webblog.svg)](https://github.com/AshishBhoi/webblog/releases)
[![GitHub (pre-)release](https://img.shields.io/github/release/ashishbhoi/webblog/all.svg)](https://github.com/AshishBhoi/webblog/releases)
![PHP from Packagist](https://img.shields.io/packagist/php-v/ashishbhoi/webblog.svg)

## About This Website ##

- This website is all about my personal blogging project

---

### | [My Website](https://www.abdevp.tk) | [Contact Me](https://www.abdevp.tk/contact) | [About Me](https://www.abdevp.tk/about) | [Services](https://www.abdevp.tk/services) | [Articles/Blogs](https://www.abdevp.tk/posts)  | ###

---

## Files To Be Copied ##
1. Download 'laravel.zip'
2. UnZip 'laravel.zip'

## Setup Process ##
1. Coppy files from 'Public' Folder to your hosting directory i.e. "public_html" or "www"

## Modifications To Be made ##
1. rename '/.env.example' to '/.env'
2. edit to your '.htaccess' File in "public folder"
3. edit '/config/mail.php'
4. edit '/public/index.php' 
5. 'storage link'

        $ ln -s ~/<Location Of Project "Laravel Folder">/storage/app/public ~/< hosting directory i.e. "public_html" or "www" >/storage
        
## Extra Modification ##
- This is if you have a shell access 
1. 'iniciate composer'

        $ composer install
        $ composer dumpautoload -o
        $ composer install --optimize-autoloader --no-dev
        
2. 'laravel command'

        $ php artisan config:cache
        $ php artisan route:cache
        
3. 'ckeditor'
        
        $ php artisan vendor:publish --tag=ckeditor

## Author ##

**Ashish Kumar Bhoi**

* [github/AshishBhoi](https://github.com/jonschlinkert)
* [twitter/Ashishbhoi8](https://twitter.com/jonschlinkert)

## License ##

Copyright © 2018, [Ashish Kumar Bhoi](https://github.com/AshishBhoi).
Released under the [MIT License](LICENSE).
