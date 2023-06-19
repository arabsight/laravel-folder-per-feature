<?php

namespace App\Dashboard;

use App\Core\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return 'Hello World!';
    }
}
