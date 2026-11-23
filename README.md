# Biblioteca de Libros 

API para gestionar una biblioteca de libros con operaciones CRUD y filtrado por categoría.

## Tecnologías

- PHP 8.2+
- Laravel 13
- MySQL

## Requisitos

- PHP >= 8.2
- Composer

## Instalación

1. Clonar el repositorio:
   git clone https://github.com/Anmynayle/biblioteca.git
   cd biblioteca

## Instalar Dependencias

2.  Composer install

## Configurar Entorno

3. cp .env.example .env
   php artisan key:generate

## Crear la base de datos y cargar datos de ejemplo:

4. php artisan migrate --seed

## Levantar el servidor

5. php artisan serve

La API estará disponible en: http://localhost:8000/api

## Endpoints

Libros
GET   -> /api/books -> Listar todos los libros 
GET   -> /api/books?category=1 -> Filtrar libros por categoría 
POST  -> /api/books -> Crear un nuevo libro 
GET   -> /api/books/{id} -> Ver un libro específico 
PUT   -> /api/books/{id} -> Actualizar un libro 
DELETE-> /api/books/{id} -> Eliminar un libro 

Categorias

 GET    -> /api/categories -> Listar todas las categorías 
 POST   -> /api/categories -> Crear una nueva categoría 
 DELETE -> /api/categories/{id} -> Eliminar una categoría 

 ## Ejemplos de uso:
 
 Crear una categoría

  curl -X POST http://localhost:8000/api/categories \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{"name":"Novela"}'

  Crear un libro

  curl -X POST http://localhost:8000/api/books \
  -H "Content-Type: application/json" \
  -H "Accept: application/json" \
  -d '{
    "title": "Cien años de soledad",
    "author": "Gabriel García Márquez",
    "description": "Realismo mágico",
    "published_year": 1967,
    "category_id": 1
  }'

  ## Listar Libros

  curl http://localhost:8000/api/books

  ## Filtrar por categoria

  curl "http://localhost:8000/api/books?category=1"

  ## Validaciones
   
    title: obligatorio, mínimo 3 caracteres
    author: obligatorio
    published_year: obligatorio, año válido
    category_id: obligatorio, debe existir en la tabla categories
    name (categoría): obligatorio y único

## Lógica de negocio
    
    -No se puede eliminar una categoría si tiene libros asociados.
    -Al eliminar un libro inexistente, Laravel responde automáticamente con 404.

## Datos de ejemplo

    El seeder incluye las siguientes categorías:
    -Novela
    -Ciencia Ficción
    -Historia
    -Programación
    -Fantasía
Y varios libros de ejemplo asociados
## Autor

Anmy Moreno
 
