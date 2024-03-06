<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class PropertyController extends Controller
{
    function index() {
        return Inertia::render('Properties/Index');
    }
}
