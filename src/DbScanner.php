<?php
namespace DbScanner;

use Exception;
use Illuminate\Support\Facades\Schema;

class DbScanner {
    
    public function __construct(public $tables, public $views, private $db_report) {
        $this->db_report = [];
    }

    public function scan() {
        //$this->tables = Schema::getTables();
        //For Loop for the table goes here 
        return $this->tables;
    }

    private function getTableIndexes($table_name = "") {
        if (!empty($table_name)) {
            $table_indexes = Schema::getIndexes($table_name);
            return $table_indexes;
        } 

        return null;
    }

    public function getReport() {
        return $this->db_report;
    }
}

?>