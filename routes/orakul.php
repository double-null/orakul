<?php

Flight::route('/admin/*', ['Orakul\Controllers\StartController', 'init']);
//----------------------------------------------------------------------------------------------------------------------
Flight::route('/admin/pages', ['Orakul\Controllers\PageController', 'index']);

Flight::route('/admin/pages/create', ['Orakul\Controllers\PageController', 'create']);

Flight::route('/admin/pages/store', ['Orakul\Controllers\PageController', 'store']);
//----------------------------------------------------------------------------------------------------------------------
Flight::route('/admin/services', ['Orakul\Controllers\ServiceController', 'index']);

Flight::route('/admin/services/create', ['Orakul\Controllers\ServiceController', 'create']);

Flight::route('/admin/services/store', ['Orakul\Controllers\ServiceController', 'store']);
//----------------------------------------------------------------------------------------------------------------------
Flight::route('/admin/reviews', ['Orakul\Controllers\ReviewController', 'index']);

Flight::route('/admin/reviews/create', ['Orakul\Controllers\ReviewController', 'create']);

Flight::route('/admin/reviews/store', ['Orakul\Controllers\ReviewController', 'store']);
//----------------------------------------------------------------------------------------------------------------------

Flight::route('/admin/upload', ['Orakul\Controllers\ImageController', 'upload']);