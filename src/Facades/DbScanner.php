<?php

namespace Raveesgohiel\Dbscanner\Facades;

use Illuminate\Support\Facades\Facade;

class DbScanner extends Facade {

    /**
     * 
     * A facade to allow other classes to use the DbScanner service
     * 
     * @return void
     */
    protected static function getFacadeAccessor() {
        return 'dbscanner';
    }
}

?>