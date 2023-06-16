## Book manager

## Requisitos
- php 8.1+
- composer
- mysql 8.0
- nginx

## Instalación con docker (contiene php8.1-fpm, mysql y nginx)

Crea archivo .env usando como base .env.example y coloca los datos de la base. Al usar docker DB_HOST debe ser mismo nombre del contenedor, en este caso en mysql y password no debe estar en blanco

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=books_manager
DB_USERNAME=root
DB_PASSWORD=123
```

``` 
docker-compose up
```
esperar a que la conección con mysql esté lista.

Abrir nueva terminal e instalar dependencias y ejecutar preparación de base datos con sus tablas, para facilitar el proceso ello se puede ejecutar el script .sh en la carpeta Docker con el siguiente comando

(Al usar ubuntu como OS host asegurarse de tener permiso total a la carpeta del projecto, "permiso chmod -R 775 debería ser suficiente")

```
docker exec -it books-manager-app bash -c "./Docker/entrypoint.sh"
```

Listo, puedes utilizar los diferentes API endpoints en la carpeta postman collection.

Tambien incluye vista web por medio del puerto 8080
![image](https://github.com/AlexVentura-p/books-manager/assets/78453595/f3969706-dfc2-4919-afa2-2d90966da181)

