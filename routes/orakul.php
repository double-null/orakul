<?php

Flight::route('/orakul/@keyOne/@keyTwo', ['Orakul\Controllers\AuthController', 'login']);

Flight::route('/admin/*', ['Orakul\Controllers\StartController', 'init']);

Flight::route('/admin/logout', ['Orakul\Controllers\AuthController', 'logout']);

//----------------------------------------------------------------------------------------------------------------------
Flight::route('/admin/pages', ['Orakul\Controllers\PageController', 'index']);

Flight::route('/admin/pages/create', ['Orakul\Controllers\PageController', 'create']);

Flight::route('/admin/pages/store', ['Orakul\Controllers\PageController', 'store']);

Flight::route('/admin/pages/edit/@id', ['Orakul\Controllers\PageController', 'edit']);

Flight::route('/admin/pages/update/@id', ['Orakul\Controllers\PageController', 'update']);

Flight::route('/admin/pages/destroy/@id', ['Orakul\Controllers\PageController', 'destroy']);
//----------------------------------------------------------------------------------------------------------------------
Flight::route('/admin/services', ['Orakul\Controllers\ServiceController', 'index']);

Flight::route('/admin/services/create', ['Orakul\Controllers\ServiceController', 'create']);

Flight::route('/admin/services/store', ['Orakul\Controllers\ServiceController', 'store']);

Flight::route('/admin/services/edit/@id', ['Orakul\Controllers\ServiceController', 'edit']);

Flight::route('/admin/services/update/@id', ['Orakul\Controllers\ServiceController', 'update']);

Flight::route('/admin/services/destroy/@id', ['Orakul\Controllers\ServiceController', 'destroy']);
//----------------------------------------------------------------------------------------------------------------------
Flight::route('/admin/reviews', ['Orakul\Controllers\ReviewController', 'index']);

Flight::route('/admin/reviews/create', ['Orakul\Controllers\ReviewController', 'create']);

Flight::route('/admin/reviews/store', ['Orakul\Controllers\ReviewController', 'store']);

Flight::route('/admin/reviews/edit/@id', ['Orakul\Controllers\ReviewController', 'edit']);

Flight::route('/admin/reviews/update/@id', ['Orakul\Controllers\ReviewController', 'update']);

Flight::route('/admin/reviews/destroy/@id', ['Orakul\Controllers\ReviewController', 'destroy']);
//----------------------------------------------------------------------------------------------------------------------

Flight::route('/admin/blocks', ['Orakul\Controllers\BlockController', 'index']);

Flight::route('/admin/blocks/create', ['Orakul\Controllers\BlockController', 'create']);

Flight::route('/admin/blocks/store', ['Orakul\Controllers\BlockController', 'store']);

//Flight::route('/admin/blocks/edit/@id', ['Orakul\Controllers\BlockReviewController', 'edit']);

//Flight::route('/admin/blocks/update/@id', ['Orakul\Controllers\BlockReviewController', 'update']);

Flight::route('/admin/blocks/destroy/@id', ['Orakul\Controllers\BlockController', 'destroy']);

//----------------------------------------------------------------------------------------------------------------------

Flight::route('/admin/upload', ['Orakul\Controllers\ImageController', 'upload']);