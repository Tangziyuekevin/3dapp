<?php

require __DIR__.'/db.php';

class InfoModel {
    public $db;
    public function __construct(){
        $this->db=DB::getDB();
    }

    public function getProducts() {
        $result = $this->db->query('select * from product');
        return $result->fetchAll();
    }


    public function createProductTable() {
        $createTableSql = <<<EOF
        create table product(
            id int primary key not null,
            `name` varchar(100) not null,
            description varchar(200) not null
        );
EOF;
        $this->db->exec($createTableSql);
    }

    public function execSql($sql){
        $this->db->exec($sql);
    }
}