<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DefinitionsController extends Controller
{
    public function index() {
        return view('Definition.index');
    }
}
