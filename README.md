>

## About task

The goal of this project is to implement a RESTful API using the latest version of the
Laravel Framework

## About users
- login : http://localhost/bit-kw/bit-kw/public/api/login

    * method-> post
    * header-> Accept: application/json
    * data ->email=admin@gmail.com & password=12345678
    ### Only authenticated admins should use all next API endpoints:
    
 - add user : http://localhost/bit-kw/bit-kw/public/api/adduser
 
    * method-> post
    * header-> Accept: application/json & Authorization: Bearer token_generated_on_login
    * data ->name=user&email=user@test.com&password=passuser&c_password=passuser&role=admin or user
    
 - logout : http://localhost/bit-kw/bit-kw/public/api/logout
 
    * method-> get
    * header-> Accept: application/json & Authorization: Bearer token_generated_on_login
   
    
