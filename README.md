# laravel-querylist
Laravel5 facade for QueryList.

## Installation
 require laravel 5.5

    composer require roy688/laravel-querylist

## Usage
routes/web.php

    Route::get('/', function () {
        $ql = QueryList::get('http://cms.querylist.cc/bizhi/453.html')->find('img')->attrs('src');
        print_r($ql->all());
    });
