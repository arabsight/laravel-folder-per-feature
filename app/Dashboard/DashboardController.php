<?php

namespace App\Dashboard;

use App\Core\Http\Controllers\Controller;
use App\Users\User;

class DashboardController extends Controller
{
    public function __invoke()
    {
        $users = User::all();
        return $users;
    }
}
