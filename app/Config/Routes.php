<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'ResumeController::index');

// $routes->get('/edit_about/(:segment)/edit', 'ResumeController::ubah/$1');
$routes->get('/resume_controller/(:segment)/edit', 'ResumeController::edit/$1');
$routes->post('/resume_controller/(:segment)/update', 'ResumeController::update/$1');





$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('ResumeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}