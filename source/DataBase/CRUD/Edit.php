<?php

namespace source\DataBase\CRUD;

use SimpleCrud\Database;
use SimpleCrud\Table;
use source\DataBase\Connection\Connection;

trait Edit
{

    public function update($id)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        $result = $db->$table[$id] = $_POST;
    }

    public function updateColumn($id, $column, $value)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        $result = $db->$table[$id] = [$column => $value];
    }

}