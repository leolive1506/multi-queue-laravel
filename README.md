# Especificar qual conexão
```sh
Job::dispatch()->onConnection('database');
```
- Se não passar nada, pega o default
```sh
php artisan queue:work database
```

# Especificar qual fila
```php
HighJob::dispatch()->onQueue('high');
LowJob::dispatch()->onQueue('low');;
// ou no constructor
public function __construc()
{
    $this->queue = 'high';
}
```
- Se não passar nada, pega o default e não executa as outras filas
- para especificar fila
```sh
php artisan queue:work --queue=high
```

# Definir prioridades para executar fila
```sh
php artisan queue:work --queue=high,low,default
php artisan queue:work --queue=low,high,default
```

# Horizon
- arquivo é possivel definir max e min de processos
