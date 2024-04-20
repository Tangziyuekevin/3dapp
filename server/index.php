<?php
header("Content-type:text/json;charset=utf-8");
require "./Controller/InfoController.php";
$controller=new InfoController();
// initProduct($controller);
echo json_encode($controller->getProducts(),JSON_UNESCAPED_UNICODE);


function initProduct($controller){
    $controller->createProductTable();
 $arr=array(
    ["name"=>"Coca Cola X3D Model","description"=>"This is the X3D model of Coca Cola,to X3D for display online."],
    ["name"=>"Sprite X3D Model","description"=>"This is the X3D model of Sprite bottle,to X3D for display online. "],
    ["name"=>"Pepper X3D Model","description"=>"This is the X3D model of Pepper,to X3D for display online."],
 );
 foreach($arr as $key=>$item){
 $sql=<<<EOF
 insert into product values ({$key},"{$item['name']}","{$item["description"]}");
 EOF;
 dump($sql);
    $controller->execute($sql);
 }
}

function dump($str){
    echo "<pre/>";
    var_dump($str);
}