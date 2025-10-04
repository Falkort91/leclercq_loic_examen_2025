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
    case 'form':
        /* ROUTE D'AJOUT D'UN POST: affichage du formulaire
			PATTERN: /posts/add/form.html
			CTRL: postsController
			ACTION: addFormAction
			TITLE: Alex Parker - Add a post */
            PostsController\addFormAction($connexion);
        break;
    case 'insert':
        /* ROUTE D'AJOUT D'UN POST: INSERT
			PATTERN: /posts/add/insert.html
			CTRL: postsController
			ACTION: createAction
			PAS DE TITLE CAR REDIRECTION VERS LA PAGE D'ACCUEIL */
            PostsController\createAction($connexion, $_POST);
        break;
    case 'edit':
            /* ROUTE DE MODIFICATION D'UN POST: UPDATE
			PATTERN: /posts/id/slug-du-post/edit/update.html
			CTRL: postsController
			ACTION: editAction
			PAS DE TITLE CAR REDIRECTION VERS LA PAGE DE DETAILS DU POST */
            PostsController\editAction($connexion, $_GET['id']);
        break;
    case 'update':
        /* ROUTE DE MODIFICATION D'UN POST: UPDATE
			PATTERN: /posts/id/slug-du-post/edit/update.html
			CTRL: postsController
			ACTION: updateAction
			PAS DE TITLE CAR REDIRECTION VERS LA PAGE DE DETAILS DU POST */
            PostsController\updateAction($connexion, $_GET['id'], $_POST);
        break;
    case 'delete':
        /* ROUTE DE MODIFICATION D'UN POST: DELETE
			PATTERN: /posts/id/slug-du-post/edit/delete.html
			CTRL: postsController
			ACTION: deleteAction
			PAS DE TITLE CAR REDIRECTION VERS LA PAGE DE DETAILS DU POST */
            PostsController\deleteAction($connexion, $_GET['id']);
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