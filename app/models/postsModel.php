<?php

namespace App\Models\PostsModel;

use \PDO;

function findAll(PDO $connexion, int $limit=5):array{
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