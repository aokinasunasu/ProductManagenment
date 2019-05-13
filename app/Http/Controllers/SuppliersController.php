<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Suppliers;

class SuppliersController extends Controller
{
    public function index(Request $request) {

        // TODO 検索フォーム ページネーション
        $const = config('const');
        $itmes = Suppliers::all();

        return view('Suppliers.index',[
            'itmes' => $itmes,
            'const' => $const,
        ]);
    }

    public function new() {
        $const = config('const');
        return view('Suppliers.new',[
            'const' => $const,
        ]);
    }

    public function edit(Request $request) {

        // データ取得
        try {
            $id = $request->id;
            $form = Suppliers::find($id);
            $const = config('const');

        } catch (Exception $e) {
            return redirect('/product')->with('alert_message', 'データの取得に失敗しました');
            // echo '捕捉した例外: ',  $e->getMessage(), "\n";
        }
        return view('Suppliers.edit',[
            'form' => $form,
            'const' => $const,
        ]);
    }

    public function update(Request $request) {

        $form = $request->all();
        // バリデーション
        $this->validate($request, Suppliers::$rules, Suppliers::$messages);

        // id 存在:編集　
        if ($form['id']) {
            $suppliers = Suppliers::find($form['id']);
            $suppliers->fill($form)->save();
            return redirect('/suppliers')->with('success_message', 'データの更新に成功しました。');
        } else {
            $suppliers = new Suppliers;
            unset($form['_token']);
            $suppliers->fill($form)->save();
            return redirect('/suppliers')->with('success_message', 'データの作成に成功しました。');
        }
    }

    // 物理削除なし
    public function delete() {
        return view('Product.index');
    }
}
