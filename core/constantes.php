<?php

define('PUBLIC_BASE_URL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . explode('index.php',$_SERVER['PHP_SELF'])[0]);
/* Ne pas oublier de rajouter dans le head  <base href="<?php echo PUBLIC_BASE_URL;?>"> */
