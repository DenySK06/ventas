<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class testController extends Controller
{
    public function test(){
        return Inertia::render('Test/Index');
    }
}
