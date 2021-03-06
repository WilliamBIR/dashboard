<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        return Inertia::render('Welcome');
    }
}
