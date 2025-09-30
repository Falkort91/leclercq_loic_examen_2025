<?php



if (isset($_GET['posts'])):
    
    include '../app/routers/posts.php';
    

else:
/* Route par défaut: listes des posts
    PATTERN: /
    CTRL: postsController
    Action: indexAction
    TITLE Alex Parker - Blog */
include '../app/controllers/postsController.php';
    \App\Controllers\PostsController\indexAction($connexion);
endif;