<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion, int $limit=10):array{
    $sql = "SELECT p.*, c.name
            FROM posts p
            JOIN categories c on p.category_id = c.id
            ORDER BY created_at DESC
            LIMIT :limit;";
    $rs=$connexion->prepare($sql);
    $rs->bindValue(':limit',$limit,PDO::PARAM_INT) ;
    $rs->execute();               
    return $rs->fetchall(PDO::FETCH_ASSOC);
}

function findOneById(PDO $connexion, $id){
    $sql = "SELECT p.*,c.name
            FROM posts p
            JOIN categories c on p.category_id = c.id
            WHERE p.id=:id;";
    $rs = $connexion->prepare($sql); 
    $rs->bindValue(':id',$id,PDO::PARAM_INT);
    $rs->execute();   
    return $rs->fetch(PDO::FETCH_ASSOC);
}