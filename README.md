# Laravel, Semantic UI and VueJS

This is a fresh Laravel installation with Semantic UI as CSS framework and Vue.

### Includes
- Laravel 5.2
- Semantic UI 2.1
    - LESS support
- Vue
- Imagemin
- HTML5Shiv
- Bower
- Gulp
- And more...

![Preview](https://i.imgur.com/95eAD9Q.png)

### Pre-requisites
- PHP >= 5.5.9
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- Composer (https://getcomposer.org)
- npm (https://nodejs.org/en)
- Bower (http://bower.io)

### Installation
1. Clone the repo or download and extract the ZIP.
1. Create an empty database.
1. Copy `.env.example` to `.env` and change its values where necessary.
1. `composer install`
1. `npm install`
1. `bower install`
1. `gulp`

### Linux permissions
On Linux, you have to grant permissions to certain directories.

#### Debian-based Operating Systems
```
# Change ownership of current folder and everything inside it to www-data
chown -R www-data:www-data .

# Add the current user to www-data group
sudo usermod -aG www-data $USER
addgroup www-data
```
