<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;


class DmPageController extends Controller
{
    public function dmPage(): \Inertia\Response
    {
        return Inertia::render('DmPage');
    }
}
