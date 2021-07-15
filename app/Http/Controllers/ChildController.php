<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class ChildController extends Controller
{
    public function index()
    {
        return Inertia::render('Child/Index');
    }
}
