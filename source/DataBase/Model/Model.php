<?php
namespace source\DataBase\Model;


use source\DataBase\CRUD\Create;
use source\DataBase\CRUD\Delete;
use source\DataBase\CRUD\Edit;
use source\DataBase\CRUD\Relation;
use source\DataBase\CRUD\Show;

abstract class Model {


    protected $model ;


    use Create, Delete, Edit, Show, Relation ;

}