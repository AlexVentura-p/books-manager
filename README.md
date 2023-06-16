## Book manager

## Requisitos
- php 8.1+
- composer
- mysql 8.0
- nginx

## Instalación con docker
``` 
docker-compose up
```
esperar a que la conección con mysql esté lista.

Instalar dependencias y ejecutar preparación de base datos con sus tablas, para facilitar el proceso ello se puede ejecutar el script .sh en la carpeta Docker con el siguiente comando

```
docker exec -it books-manager-app bash -c "./Docker/entrypoint.sh"
```

Listo, puedes utilizar los diferentes endpoints en la carpeta postman collection.