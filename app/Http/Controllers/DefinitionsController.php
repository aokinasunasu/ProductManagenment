<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Definition;

class DefinitionsController extends Controller
{
    public function index(Request $request) {
        $type = config('const.DEFINITONS_TYPE');
        $page = 10;
        // 検索するテキストの表示
        $search_type = $request->type;
        $search_name = $request->name;
        $search_displey_name = $request->displey_name;
        $query = Definition::query();

        if (!empty($search_type)) {
            $query->where('type', '=', $search_type);
        }

        if (!empty($search_name)) {
            $query->where('name', 'like', '%'.$search_name.'%');
        }

        if (!empty($search_displey_name)) {
            $query->where('displey_name', 'like', '%'.$search_displey_name.'%');
        }

        $itmes = $query->paginate($page);

        return view('Definition.index',[
            'type' => $type,
            'page' => $page,
            'itmes' => $itmes
        ]);
    }
}
