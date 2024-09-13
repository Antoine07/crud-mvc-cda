<?php

/**
 * Bootstrap & routing
 * 
 * @author antoinelucsko <antoine.lucsko@gmail.com>
 */

/**
 * Constantes
 */

$url_style = './assets/css/style.css';
$url_main = './assets/js/app.js';

require_once __DIR__ . '/config/database.php';

require_once __DIR__ . '/library/helpers.php';
require_once __DIR__ . '/models/post.php';
require_once __DIR__ . '/models/category.php';
require_once __DIR__ . '/controllers/home.php';
require_once __DIR__ . '/controllers/admin/post.php';

/**
 * ROUTER
 */


$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = urldecode($uri);

$method = strtolower($_SERVER["REQUEST_METHOD"]);


/**
 * @method POST
 */
if ($method == 'post') {
    switch ($uri) {

        case '/add/post':
            handleCreatePost();
            break;

        case '/delete/post':
            deletePost(1);
            break;

        default:
            throw new RuntimeException('routing error');
    }
}

/**
 * @method GET
 */
if ($method == 'get') {
    switch ($uri) {

        case '/':
            home_controller();
            break;

        case '/dashboard':
            dashboard_controller();
            break;

        case '/add/post':
            create();
            break;

        default:
            throw new RuntimeException('routing error');
    }
}
