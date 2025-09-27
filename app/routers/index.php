<?php

//Route par défaut: listes des posts
//PATTERN: /
//CTRL: postsController
//Action: indexAction
//TITLE Alex Parker - Blog
include_once '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);