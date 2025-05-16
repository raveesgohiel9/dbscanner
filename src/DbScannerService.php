<?php

namespace Raveesgohiel\Dbscanner;

use Illuminate\Support\Facades\DB;

class DbScannerService {

    public function scan() {
        $tables = DB::select('SHOW TABLES');
        return $tables;
    }

    private function getTableIndexes($table_name = "", $schema) {
        if (!empty($table_name)) {
            $table_indexes = $schema->getIndexes($table_name);
            return $table_indexes;
        } 

        return null;
    }

    public function getReport() {
        return $this->db_report;
    }
}