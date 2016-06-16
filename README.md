# Laravel, Semantic UI and Vue

This is a fresh Laravel installation with Semantic UI as CSS framework and Vue.

### Includes
- Laravel 5.2
- Semantic UI 2.1
- Vue
- Imagemin
- HTML5Shiv
- Bower
- Gulp
- And more...

![Preview](https://i.imgur.com/6EG9IcY.png)

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

### License
The MIT License (MIT)

Copyright (c) 2016 pedzed

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
