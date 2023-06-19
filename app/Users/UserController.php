<?php

namespace App\Users;

use App\Core\Http\Controllers\Controller;

class UserController extends Controller
{
    public function __invoke()
    {
        return 'Hello World!';
    }
}
