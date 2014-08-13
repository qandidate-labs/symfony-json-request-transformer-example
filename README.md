symfony-json-request-transformer-example
========================================

Example Symfony and AngularJS demonstrating [qandidate/symfony-json-request-transformer](https://github.com/vonq/symfony-json-request-transformer)


## Install
1. Clone this repository.
2. Run `composer install`
3. Run `bower install`
4. Run `app/console server:run --env=dev -vvv` to start the server

## Example
Point your browser to http://localhost:8000/angular.html

You will see the AngularJS app performing two requests. One is a GET request,
the other a POST request.
In the DefaultController you will see the JSON POST request is automatically
decoded and its properties are easily accessible in the Request object.

The magic happens in the JsonRequestTransformerListener which is tagged as a
`kernel.event_listener` in `services.xml`
