<?php

namespace Raveesgohiel\Dbscanner\Facades;

use Illuminate\Support\Facades\Facade;

class DbScanner extends Facade {
    protected static function getFacadeAccessor() {
        return 'dbscanner';
    }
}

?>