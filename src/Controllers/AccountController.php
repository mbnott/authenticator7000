<?php

namespace Mbnot\Authenticator7000\Controllers;

use Mbnot\ForoolApi\models\HTTP_STATUS;
use Slim\Psr7\Request;
use Slim\Psr7\Response;
use Mbnot\Authenticator7000\Controllers\BaseController;

class AccountController extends BaseController
{
    public static function register(Request $request, Response $response): Response
    {
        return $response->withStatus(HTTP_STATUS::NOT_YET_IMPLEMENTED);
    }

    public static function login(Request $request, Response $response): Response
    {
        return $response->withStatus(HTTP_STATUS::NOT_YET_IMPLEMENTED);
    }

    public static function getUser(Request $request, Response $response): Response
    {
        return $response->withStatus(HTTP_STATUS::NOT_YET_IMPLEMENTED);
    }

    public function updateUser(Request $request, Response $response): Response
    {
        return $response->withStatus(HTTP_STATUS::NOT_YET_IMPLEMENTED);
    }
}