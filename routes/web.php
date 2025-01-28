<?php

global $app;
use Mbnot\Authenticator7000\Controllers\AccountController;
use Mbnot\Authenticator7000\Controllers\AdminController;
use Mbnot\Authenticator7000\Controllers\FrontendController;
require '../vendor/autoload.php';

// Auth
$app->post('/api/register', [AccountController::class, 'register']);
$app->post('/api/login', [AccountController::class, 'login']);

// Account management
$app->get('/api/user', [AccountController::class, 'getUser']);
$app->put('/api/user', [AccountController::class, 'updateUser']);

// Admin
$app->get('/api/admin/users', [AdminController::class, 'getUsers']);
$app->get('/api/admin/users', [AdminController::class, 'createUser']);
$app->get('/api/admin/users/:id', [AdminController::class, 'updateUser']);
$app->get('/api/admin/users/:id', [AdminController::class, 'deleteUser']);
$app->get('/api/admin/switch-role/:id', [AdminController::class, 'impersonateUser']);

// Frontend
$app->post('/api/admin/switch-role', [FrontendController::class, '']);