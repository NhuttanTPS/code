<?php
function danhmuc()
{
    $database = new database();
    $getall = $database->connect->prepare("SELECT * from danhmuc");
    $getall->setFetchMode(PDO::FETCH_OBJ);
    $getall->execute();
    return $getall->fetchAll();
}


function insert($mahh, $tenhh)
{
    $database = new database();
    $getall = $database->connect->prepare("INSERT INTO danhmuc(MAHH,TENHH) VALUES ('$mahh','$tenhh')");
    $getall->execute();
}
