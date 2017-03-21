# Laravel5.3-Vuejs2-demo

### About this application

This application is built on [Laravel 5.3](https://laravel.com/docs/5.3) and [Vue](https://vuejs.org/). Application is using [this](https://github.com/puikinsh/gentelella) theme.

### Dependencies
* [Laravel 5.3](https://laravel.com/docs/5.3)
* [VueJs 2](https://vuejs.org/)

## Installation

Please clone this repository to your computer and do below steps to run:

Install all dependencies
```sh
$ composer install
```
```sh
$ npm install
```
Create new database in mysql
Create .env file based on .env.example and update it based on your configuration
Database migration
```sh
$ php artisan migrate --seed
```
```sh
$ php artisan passport:install
```
```sh
$ gulp
```
Please confirm that you have ```sessions``` ```views``` and ```cache``` folders under ```storage/framework``` directory
```sh
$ php artisan serve
```
Open
```
http://localhost:8000
```

## Directory Structure

When you are clone this l53-starter demoApp for laravel 5.3 and vuejs 2.1.8, It contains the following tree structure for the perticular `resources` folder in root directory :

### Resources directory tree
.
 * [resources](./resources)
   * [assets](./resources/assets)
        * [js](./resources/assets/js)
            * app.js (./resources/assets/js/app.js)
            * bootstarp.js (./resources/assets/js/bootstarp.js)
            * [components](./resources/assets/js/components)
            * router.js (./resources/assets/js/router.js)
            * [store](./resources/assets/js/store)
        * [sass](./resources/assets/sass)
   * [lang](./resources/lang)
   * [views](./resources/views)

### Explanation for VueJs 2.1.8 :

* The ```app.js``` is creating a root Vue instance with the Vue constructor function, so it is the main file for starting with the vuejs.
* This file is added in main ```app.blade.php``` which is in the ```resources/views``` directory.
* The ```router.js``` file contains front-end routes for the app.
* And the ```store``` directory contains ```actions.js, getters.js, index.js, mutations-types.js and  mutations.js```.
* In that state is managed for the data using vuex (https://vuex.vuejs.org/en/state.html)
* ```App.vue``` is the main component in which other components are renders.
* For starting to work with vuejs 2, you are free to add new components in ```components``` directory.
