<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Booking::index');

$routes->get('/dashboard', 'Booking::dashboard', ['as' => 'home.dashboard']);
$routes->get('/add_booking', 'Booking::create', ['as' => 'home.add_booking']);
$routes->get('/booking_view', 'Booking::show', ['as' => 'home.booking_view']);
$routes->post('/submit-booking', 'Booking::store', ['as' => 'home.submit_booking']);
$routes->get('delete/(:num)', 'Booking::delete/$1', ['as' => 'home.delete']);
$routes->get('edit-view/(:num)', 'Booking::edit/$1', ['as' => 'home.edit_view']);
$routes->post('update', 'Booking::update', ['as' => 'home.update']);

service('auth')->routes($routes);

$routes->get('/add_vehicle', 'Vehicle::create', ['as' => 'home.add_vehicle']);
$routes->get('/vehicle_view', 'Vehicle::show', ['as' => 'home.vehicle_view']);
$routes->post('/submit-vehicle', 'Vehicle::store', ['as' => 'home.submit_vehicle']);
$routes->get('/delete/(:num)', 'Vehicle::delete/$1', ['as' => 'home.delete']);
$routes->get('/edit-view/(:num)', 'Vehicle::edit/$1', ['as' => 'home.edit_view']);
$routes->post('/update', 'Vehicle::update', ['as' => 'home.update']);

