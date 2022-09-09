<?php
namespace source\DataBase\CRUD;



use SimpleCrud\Database;
use source\DataBase\Connection\Connection;

trait Show {

    public function all()
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        $result = $db->$table->select()->get();
        return $result;
    }

    public function selectOrderBy($order)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        $result = $db->$table->select()->orderBy($order)->get();
        return $result;
    }

    public function find(int $id)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        $result = $db->$table[$id];
        return $result;
    }

    public function whereCondition($condition, $number , $limit = null)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        if ($limit == null) {
            $result = $db->$table->select()->where("id $condition", $number)->get();
            return $result;
        } else {
            $result = $db->$table->select()->where("id $condition", $number)->limit($limit)->get();
            return $result;
        }
    }

    public function OrderbyCondition($orderBy , $limit = null)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
        if ($limit == null) {
            $result = $db->$table->select()->orderBy("id $orderBy")->get();
            return $result;
        } else {
            $result = $db->$table->select()->orderBy("id $orderBy")->limit($limit)->get();
            return $result;
        }
    }

    public function where($colume, $condition, $secondColum)
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;

        return $db->$table->select()->where("$colume $condition, $secondColum")->get();
    }

    public function Count()
    {
        $db = new Database(Connection::getInstance());
        $table = $this->model;
       return $total = $db->$table
            ->selectAggregate('COUNT')
            ->get();
    }


}