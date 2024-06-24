<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(): \Inertia\Response
    {
        return Inertia::render('Index');
    }
}

class dmPageController extends Controller
{
    public function dmPage(): \Inertia\Response
    {
        return Inertia::render('DmPage');
    }
}
