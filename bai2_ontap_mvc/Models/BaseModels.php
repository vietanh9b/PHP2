<?php
require_once "env.php";
class BaseModels{
    protected $connect;
    public function __construct()
    {
        $this->connect = new PDO(
            "mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
    }

    function dataProcess($query,$getDataAll=true){
        $stmt=$this->connect->prepare($query);
        $stmt->execute();
        if($getDataAll){
            return $stmt->fetchAll();
        }
        return $stmt->fetch();
    }
}
