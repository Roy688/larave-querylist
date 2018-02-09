# laravel-querylist
Laravel5 facade for QueryList.

- This repository implements a simple ServiceProvider that makes a singleton instance of the QueryList easily accessible via a Facade in Laravel 5.5 package auto-discovery.

- [jae-jae/QueryList](https://github.com/jae-jae/QueryList) for more information.

## Requirements
 - Laravel 5.5

## Installation
    composer require roy688/laravel-querylist

## Usage
    // ./routes/web.php
    Route::get('/', function () {
        $ql = QueryList::get('http://cms.querylist.cc/bizhi/453.html')->find('img')->attrs('src');
        print_r($ql->all());
    });
