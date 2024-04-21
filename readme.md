https://github.com/abbodi1406/vcredist/releases
Install VisualCppRedist_AIO_x86_x64.exe

https://www.wampserver.com/en/

Wampserver change to PHP 7

composer install

php artisan key:generate

Create `exclusivelymongrels` database

.env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=exclusivelymongrels
DB_USERNAME=root
DB_PASSWORD=
```

php artisan migrate

php artisan db:seed

http://localhost/exclusively-mongrels

count(): Parameter must be an array or an object that implements Countable
Upgrade Laravel to 5.6 or downgrade PHP to 7.1
https://stackoverflow.com/questions/48343557/count-parameter-must-be-an-array-or-an-object-that-implements-countable