<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Definition;

class DefinitionsController extends Controller
{
    public function index() {
        $type = config('const.DEFINITONS_TYPE');
        $itmes = Definition::paginate(10);
        \Log::info($itmes);
        // dump($itmes);
        return view('Definition.index',[
            'type' => $type,
            'itmes' => $itmes
        ]);
    }
}
