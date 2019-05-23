<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Definition;
use DB;

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
        // 検索 条件追加
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

    public function edit(Request $request) {

        $where = [
            'name'    => $request['name'],
            'type' => $request['type'],
        ];

        $definiton = Definition::where($where)->first();
        
        $type = config('const.DEFINITONS_TYPE');

        return response()->json([
            'view' => view('Definition.edit',[
                'definiton' => $definiton,
                'type' => $type,
            ])->render(),
            'definiton' => $definiton,
            'definiton_item' => []
        ]);
    }

    public function update(Request $request) {
        $definiton_form = $request->definiton;
        $items_form = $request->definiton_item;

        DB::beginTransaction();
        try {
            // 項目
            $definiton = Definition::find($definiton_form['name']);
            $definiton->displey_name = $definiton_form['displey_name'];
            $definiton->save();
            switch ($definiton_form['type']) {
            // TODO 明細　未実装
            case 0:
                break;
            default:
                # code...
                break;
            }
            DB::commit();
        } catch (\Exception $e) {
            \log::info($e);
            DB::rollback();
        }
        return [];
    }
}
