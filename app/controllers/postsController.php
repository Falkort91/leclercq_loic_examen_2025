<?php

namespace App\Controllers\PostsController;

use App\Models\PostsModel;
use \PDO;

function indexAction(PDO $connexion) {
    include_once '../app/models/postsModel.php';
    $posts= PostsModel\findAll($connexion,3);
    global $title, $content;
    $title ="Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}