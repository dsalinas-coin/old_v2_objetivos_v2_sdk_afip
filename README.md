# modulo-afip

## Requerimientos

- Docker
- Git
- Make

## Instalación

### Pasos:

```
make build
make ssh-be
composer install
php bin/console d:m:diff
php bin/console d:m:m
```

### Seguir las instrucciones para generar e instalar los certificados de AFIP [en este documento](https://docs.google.com/document/d/1peRuXkpzQW8EfeYJjJI9bRRHcTAo8FLIfj42eWcYJPI).


## URLS de consulta
```
 http://localhost:250/info?cuits=30502793175,20378307288
 http://localhost:250/retenciones?cuits=30502793175,20378307288
```
## Database URL
```
 http://localhost:8080/
```
## ENDPOINTS

```
Por definir
```