<?php

class gioithieuClass extends database
{
        public function ()
        {
            $getall = this->connect->prepare("");
            $getall->setFetchMode(PDO::FETCH_OBJ);
            $getall->execute();
            return $getall->fetchAll();
        }
}
