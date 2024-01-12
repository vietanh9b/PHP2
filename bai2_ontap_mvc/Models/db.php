<?php
require_once "env.php";
function getConnect()
{
    $connect = new PDO(
        "mysql:host=" . DBHOST
        . ";dbname=" . DBNAME
        . ";charset=" . DBCHARSET,
        DBUSER,
        DBPASS
    );
    return $connect;
}

function dataProcess($query,$getDataAll=true){
    $conn=getConnect();
    $stmt=$conn->prepare($query);
    $stmt->execute();
    if($getDataAll){
        return $stmt->fetchAll();
    }
    return $stmt->fetch();
}

function dataProcessExcute($sql){
    try{
        $conn=getConnect();
        $stmt=$conn->prepare($sql);
        $stmt->execute();
    }
    catch(PDOException $e){
        throw $e;
    }
    finally{
        unset($conn);
    }
}