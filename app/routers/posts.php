<?php

use \App\Controllers\PostsController;

include '../app/controllers/postsController.php';

switch ($_GET['posts']):
    case 'show':
        /* ROUTE DU DETAIL D'UN POST
		PATTERN: /posts/id/slug-du-post.html
		URL: ???
		CTRL: postsController
		ACTION: ShowAction
		TITLE: Alex Parker - Title du post */
        PostsController\showAction($connexion, $_GET['id']);
    break;
    default:
        /* Route par défaut: listes des posts
        PATTERN: /
        CTRL: postsController
        Action: indexAction
        TITLE Alex Parker - Blog */
        PostsController\indexAction($connexion);
    break;
    endswitch;