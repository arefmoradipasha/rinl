<?php
namespace source\DataBase\CRUD;

use SimpleCrud\Database;
use source\DataBase\Connection\Connection;

trait Create {

    public function insert()
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        $result = $db->$table->insert($_POST)->get();

        if ($result)
            echo 'fine';
        else
            echo 'somethings wrong';

    }
}