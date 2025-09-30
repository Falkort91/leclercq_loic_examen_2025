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
    case 'addForm':
        /* ROUTE D'AJOUT D'UN POST: affichage du formulaire
			PATTERN: /posts/add/form.html
			CTRL: postsController
			ACTION: addFormAction
			TITLE: Alex Parker - Add a post */
            PostsController\addFormAction($connexion);
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