<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class JoinController extends Controller
{
    public function create() {
        return Inertia::render('Join');
    }
}
