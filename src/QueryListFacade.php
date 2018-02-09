<?php

namespace Roy688\QueryList;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Roy688\QueryList\QueryList
 */
class QueryListFacade extends Facade
{

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'querylist';
    }
}