<?php

Flight::route('/orakul/@keyOne/@keyTwo', ['Orakul\Controllers\AuthController', 'login']);

Flight::route('/admin/*', ['Orakul\Controllers\StartController', 'init']);

Flight::route('/admin/logout', ['Orakul\Controllers\AuthController', 'logout']);

Flight::route('/admin/upload', ['Orakul\Controllers\ImageController', 'upload']);

$modules = [
    'pages' => 'Orakul\Controllers\PageController',
    'categories' => 'Orakul\Controllers\CategoryController',
    'products' => 'Orakul\Controllers\ProductController',
    'portfolio' => 'Orakul\Controllers\PortfolioController',
    'reviews' => 'Orakul\Controllers\ReviewController',
    'blocks' => 'Orakul\Controllers\BlockController',
];

foreach ($modules as $module => $controller) {

    Flight::route("/admin/$module", [$controller, 'index']);

    Flight::route("/admin/$module/create", [$controller, 'create']);

    Flight::route("/admin/$module/store", [$controller, 'store']);

    Flight::route("/admin/$module/edit/@id", [$controller, 'edit']);

    Flight::route("/admin/$module/update/@id", [$controller, 'update']);

    Flight::route("/admin/$module/destroy/@id", [$controller, 'destroy']);
}