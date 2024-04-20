<?php
require './Model/InfoModel.php';
class InfoController{
    public $model;
    public function __construct(){
        $this->model=new InfoModel();
    }
    public function createProductTable(){
        $this->model->createProductTable();
    }
    public function execute($sql){
        $this->model->execSql($sql);
    }
    public function getProducts(){
        return $this->model->getProducts();
    }
}