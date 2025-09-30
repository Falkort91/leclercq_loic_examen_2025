<?php

namespace App\Controllers\PostsController;

use \App\Models\PostsModel;
use \App\Models\CategoriesModel;
use \PDO;

function indexAction(PDO $connexion) {
    include_once '../app/models/postsModel.php';
    $posts= PostsModel\findAll($connexion,10);
    global $title, $content;
    $title ="Alex Parker - Blog";
    ob_start();
    include '../app/views/posts/index.php';
    $content = ob_get_clean();
}

function showAction(PDO $connexion,int $id):void{
    include_once '../app/models/postsModel.php';
    $post= PostsModel\findOneById($connexion,$id);
    global $content, $title;
    $title ="Alex Parker - ".$post['title'];
    ob_start();
    include "../app/views/posts/show.php";
    $content = ob_get_clean();
}

function addFormAction(PDO $connexion){
    include_once '../app/models/categoriesModel.php';
    $categories= CategoriesModel\findAll($connexion);
    global $content, $tilte;
    $title = "Alex Parker - Add a post";
    ob_start();
    include '../app/views/posts/addForm.php';
    $content = ob_get_clean();
}