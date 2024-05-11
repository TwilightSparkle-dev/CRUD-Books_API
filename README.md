### Environment(Linux or MacOS):
- composer
- [php and php-ext](https://laravel.com/docs/11.x/deployment#server-requirements)
- [sqlite](https://laravel.com/docs/11.x/installation#databases-and-migrations)

### Installation:
    1. Using local software(php and mysql/sqlite)
        - clone repo
        - create DB and set DB connections fields in "/.env"
        - run command "composer i"
        - run command "php artisan migrate"
        - run command "php artisan serve"

    2. Using docker
        
        

### Up server:
    
### Run tests:
    - run command "php artisan test"

### Note:
    - postman collection loc in root repo dir: "postman-collection_api-crud-books.json"
    - DB connections can using one database
    - swagger docs: "/api/documentation"


