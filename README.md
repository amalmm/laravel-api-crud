## Installation
change
```shell
.env.exmple to .env
```
create demo-app, in db mysql
```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=demo-app    
DB_USERNAME=root
DB_PASSWORD=

```

## run

```shell
php artisan serve
```
```shell
php artisan migrte
``` 
 
 
## url
index | get
```shell
http://127.0.0.1:8000/api/amal
``` 

create | input ( name, email ) | post  
```shell
http://127.0.0.1:8000/api/amal
``` 

edit | input ( name, email ) | put
```shell
http://127.0.0.1:8000/api/amal/{amal}
``` 

delete | input ( name, email ) | delete
```shell
http://127.0.0.1:8000/api/amal/{amal}
``` 
