## PHP
### Dump POST contents
```
echo '<pre>';
var_dump($_POST);
echo '</pre>';
```
### Dump variable
```
echo '<pre>';
var_dump($jsonArray);
echo '</pre>';
```
### run PHP code beautifier
```
phpcbf
```
### PHP error_log function
```
error_log("Some error message");
```
Logs can be found in /var/log/php-fpm/www-error.log