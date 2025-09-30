<?php

namespace App\Models\CategoriesModel;

use \PDO;

function findAll(PDO $connexion,):array{
    $sql = "SELECT *
            FROM categories
            ORDER BY name ASC";
    $rs = $connexion->query($sql);               
    return $rs->fetchall(PDO::FETCH_ASSOC);
}