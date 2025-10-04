<?php

namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion):array{
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC";
    $rs = $connexion->query($sql);               
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}

function countCategories(PDO $connexion):array{
    $sql ="SELECT c.name AS category, COUNT(p.id) AS posts_number
            FROM categories c
            LEFT JOIN posts p ON c.id = p.category_id
            GROUP BY c.id
            ORDER BY c.name ASC";
    $rs= $connexion->query($sql);
    return $rs->fetchAll(PDO::FETCH_ASSOC);
}