# Especificar qual conexão
```sh
Job::dispatch()->onConnection('database');
```
- Se não passar nada, pega o default
```sh
php artisan queue:work database
```
