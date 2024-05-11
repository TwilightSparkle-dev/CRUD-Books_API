## Up with Docker
    - clone repo and cd to project root.
    - run command "docker-compose build"


## Up with local software(php and mysql/sqlite)
### Environment(Linux or MacOS):
- composer
- [php and php-ext](https://laravel.com/docs/11.x/deployment#server-requirements)
- [sqlite](https://laravel.com/docs/11.x/installation#databases-and-migrations) or mysql

### Installation:
    - clone repo
    - create DB and set DB connections fields in "/.env"
    - run command "composer i"
    - run command "php artisan migrate"
    - run command "php artisan serve"    

### Note:
    - postman collection located in root repo dir: "postman-collection_api-crud-books.json"
    - DB connections can using one database
    - swagger docs: "/api/documentation"
    - start test: run command "php artisan test"


