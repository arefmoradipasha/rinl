<?php
namespace source\DataBase\CRUD;

use SimpleCrud\Database;
use source\DataBase\Connection\Connection;

trait Delete {

    public function delete(int $id)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        $result = $db->$table[$id];
        $result->delete();
        return $result;
    }

    public function deleteWithImage(int $id)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        $result = $db->$table[$id];

        if (!empty($result->image)){
//            unset(asset("image/" . $result->image) );
            $result->delete();
            return $result ;
        } else {
            return false;
        }
    }
}