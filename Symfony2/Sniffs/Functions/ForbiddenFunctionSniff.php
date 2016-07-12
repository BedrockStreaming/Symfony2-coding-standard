<?php

/**
 * Created by PhpStorm.
 * User: matiss
 * Date: 12.07.2016
 * Time: 17:31
 */
class Symfony2_Sniffs_Functions_ForbiddenFunctionSniff extends Generic_Sniffs_PHP_ForbiddenFunctionsSniff
{
    public $forbiddenFunctions = [
        'dump' => null,
        'var_dump' => null,
        'print_r' => null,
    ];
}