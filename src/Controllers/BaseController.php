<?php

namespace Mbnot\Authenticator7000\Controllers;

class BaseController
{
    /**
     * Checks if the fields given are present in the request's JSON body
     * @param Request $request
     * @param array $fields
     * @return bool TRUE if all the fields are present, FALSE otherwise
     */
    protected function verifyFields(Request $request, array $fields) : bool
    {
        $input = json_decode(file_get_contents('php://input'));
        $missingFields = array_values(array_diff($fields, array_keys((array)$input)));
        return count($missingFields) == 0;
    }
}