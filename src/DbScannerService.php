<?php

namespace Raveesgohiel\Dbscanner;

use Raveesgohiel\Dbscanner\Models\DbScanner;

class DbScannerService {

    /**
     * DB Scanner function
     * 
     * @return array
     */
    public function scan() {
        $dbscanner = new DbScanner;
        $final_result = $dbscanner->getTablesMetaData();
        return $final_result;
    }
}