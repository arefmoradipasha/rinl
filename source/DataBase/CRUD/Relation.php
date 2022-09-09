<?php

namespace source\DataBase\CRUD;

use SimpleCrud\Queries\Query;
use source\DataBase\Connection\Connection;
use SimpleCrud\Database;
use SimpleCrud\Table;


trait Relation {

    public function LeftJoin($mainTable, $secondaryTable, $foreignMainTable, $primarySecondaryTable, $primaryMainTable)
    {
        $db = Connection::getInstance();
        $res = $db->query(
            "SELECT * ,$mainTable.$primaryMainTable
                    FROM `$mainTable`
                    LEFT JOIN `$secondaryTable`
                    ON $secondaryTable.$primarySecondaryTable = $mainTable.$foreignMainTable")->fetchAll();
        return $res;
    }

}