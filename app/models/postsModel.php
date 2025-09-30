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

function findOneById(PDO $connexion, int $id){
    $sql = "SELECT p.*,c.name
            FROM posts p
            JOIN categories c on p.category_id = c.id
            WHERE p.id=:id;";
    $rs = $connexion->prepare($sql); 
    $rs->bindValue(':id',$id,PDO::PARAM_INT);
    $rs->execute();   
    return $rs->fetch(PDO::FETCH_ASSOC);
}

function create(PDO $connexion, array $data){
    $sql = "INSERT INTO posts 
            SET
            title = :title,
            text = :text,
            quote = :quote,
            category_id = :category_id,
            created_at = NOW();"; 
    $rs=$connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
    return $rs->execute();
}

function update(PDO $connexion, int $id, $data){
    $sql = "UPDATE posts
            SET
            title = :title,
            text = :text,
            quote = :quote,
            category_id = :category_id
            WHERE id = :id;";
    $rs=$connexion->prepare($sql);
    $rs->bindValue(':title', $data['title'], PDO::PARAM_STR);
    $rs->bindValue(':text', $data['text'], PDO::PARAM_STR);
    $rs->bindValue(':quote', $data['quote'], PDO::PARAM_STR);
    $rs->bindValue(':category_id', $data['category_id'], PDO::PARAM_INT);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);

    return $rs->execute();


}