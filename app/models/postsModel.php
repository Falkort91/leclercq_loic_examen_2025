<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion, int $limit=5):array{
    $sql = "SELECT p.*
            FROM posts p
            ORDER BY created_at DESC
            LIMIT :limit;";
    $rs=$connexion->prepare($sql);
    $rs->bindValue(':limit',$limit,PDO::PARAM_INT) ;
    $rs->execute();               
    return $rs->fetchall(PDO::FETCH_ASSOC);
}