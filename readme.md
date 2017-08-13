## About

Small application to search the TV maze Api and bring back a list of TV shows.
Built using laravel with vuejs front end componenets

## Installation

Clone por download the project on to your server and cd into the directory

Run <i><sub>composer install</sub></i> to install the laravel components (composer must be installed globally)

Create .env file from .env.example and change the APP_ROUTE to your local route

run <i><sub>php artisan key:generate</sub></i> to generate an application key

run <i><sub>npm install</sub></i> to install the front end components (node must be installed globally)

run <i><sub>npm run dev</sub></i> to build the front end components to the public directory

## Application Structure

The application has a basic controller-view structure. No model is required.

Routing is found in routes/web.php

The controller App\Http\Controllers\SearchController deals with search requests, process results, eliminates typos, and sends this back to the view

The view are laravel blade templates found in resources/views.
There is a master layout view, a welcome page view with a search input, and a results page view which blade uses to deal with the search the results

Front end components are stored in resources/assets
There is a single vuejs application which handles changing between json and html in the results page, and copying the json to use externally. 
There is a single scss file for the compiled css of the pages


## Production Dependencines
Laravel Framework <a href="https://laravel.com/"> </a><br>
Vuejs - for front end componenets <a href="https://vuejs.org/"> Vuejs </a><br>
Guzzle php http client - for processing api requests in laravel <a href="http://docs.guzzlephp.org/en/stable/">Guzzle php</a><br>

## Author

David Fisher
davidfisher24@gmail.com
