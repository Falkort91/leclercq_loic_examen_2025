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
    include '../app/views/posts/form.php';
    $content = ob_get_clean();
}

function createAction(PDO $connexion, array $data){
    include_once '../app/models/postsModel.php';
    $reponse = PostsModel\create($connexion, $data);
    header('Location: '. PUBLIC_BASE_URL);
}

function editAction(PDO $connexion, int $id):void{
    include_once '../app/models/postsModel.php';
    $posts = PostsModel\findOneById($connexion, $id);
    include_once '../app/models/categoriesModel.php';
    $categories = CategoriesModel\findAll($connexion, $id);
    global $content, $title;
    $title = "Alex Parker - Edit a post";
    ob_start();
    include '../app/views/posts/edit.php';
    $content = ob_get_clean();
}

function updateAction(PDO $connexion, int $id, $data){
    include_once '../app/models/postsModel.php';
    $reponse = PostsModel\update($connexion, $id, $data);
    header('Location: '. PUBLIC_BASE_URL .'posts/'.$id.'/'.\Core\Helpers\slugify($data['title']).'.html');
}

function deleteAction(PDO $connexion, int $id){
    include_once '../app/models/postsModel.php';
    $reponse = PostsModel\delete($connexion, $id);
    header('Location: '. PUBLIC_BASE_URL);
}