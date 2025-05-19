<?php

namespace Raveesgohiel\Dbscanner\Models;

use Illuminate\Support\Facades\DB;

class DbScanner {

    /**
     * Loop through all tables to get tables meta data
     * 
     * @return array
     */
    public function getTablesMetaData(): array {
        $tables_obj = DB::select('SHOW TABLES');
        $tables_report = [];
        $table_key = "Tables_in_" . DB::getDatabaseName();

        foreach($tables_obj as $table_obj) {
            $table_name = $table_obj->$table_key;
            $total_rows = DB::table($table_name)->count();
            $indexes = $this->getTableIndexes($table_name);
            $columns = $this->getColumns($table_name);

            $tables_report[$table_name] = [
                "total_rows" => $total_rows,
                "columns" => $columns,
                "indexes" => $indexes,
            ];
        }
        return $tables_report;
    }

    /**
     * Read tables indexes for the specific table
     * 
     * @param table_name
     * @return array
     */
    private function getTableIndexes($table_name = ""): array {
        $indexes = [];
        if (!empty($table_name)) {
            $table_indexes = DB::select("SHOW Indexes from `$table_name`");
            foreach($table_indexes as $table_index) {
                $indexes[] = [
                    "Field" => $table_index->Column_name,
                    "Key" => $table_index->Key_name
                ];
            }
        } 
        return $indexes;
    }

    /**
     * Read all the column meta data of a specific table
     * 
     * @param table_name
     * @return array
     */
    private function getColumns($table_name = ""): array {
        $columns = [];
        if (!empty($table_name)) {
            $table_columns = DB::select("SHOW COLUMNS FROM `$table_name`");
            $columns = json_decode(json_encode($table_columns), true);
        }
        return $columns;

    }
}