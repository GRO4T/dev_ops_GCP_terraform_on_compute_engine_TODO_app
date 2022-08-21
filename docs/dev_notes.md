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

## Github Actions
### Set up service account credentials
* Log in into Google Cloud. Go into IAM > Service Accounts.
* Pick 'Compute Engine default service account'.
* Go to Keys > ADD KEY. Download key in JSON format.
* Remove newlines from file.
```
sed -i 's/\n/ /' service_account_key.json
```
* Go to GitHub repository > Settings > Secrets > Actions.
* Create new repository secret named GOOGLE_CREDENTIALS.
* As the value paste previously downloaded service account key.