<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrdersController extends Controller
{
    public function index(Request $request) {
        // TODO 検索フォーム ページネーション
        $const = config('const');
        $itmes = Order::all();

        return view('Order.index',[
            'itmes' => $itmes,
            'const' => $const,
        ]);
    }

    public function new() {
        $const = config('const');

        return response()->json([
            'view' => view('Order.new')->render()
        ]);
    }

    public function edit(Request $request) {

        // データ取得
        try {

            $id = $request->id;
            $form = Order::find($id);
            $const = config('const');

        } catch (Exception $e) {
            return redirect('/order')->with('alert_message', 'データの取得に失敗しました');
            // echo '捕捉した例外: ',  $e->getMessage(), "\n";
        }
        return view('Order.edit',[
            'form' => $form,
            'const' => $const,
        ]);
    }

    public function update(Request $request) {
        // return view('Product.index');
        $form = $request->all();
        // バリデーション
        $this->validate($request, Product::$rules, Product::$messages);

        // id 存在:編集　
        if ($form['id']) {
            $product = Product::find($form['id']);
            $product->fill($form)->save();
            return redirect('/order')->with('success_message', 'データの更新に成功しました。');
        } else {
            $product = new Product;
            unset($form['_token']);
            $product->fill($form)->save();
            return redirect('/order')->with('success_message', 'データの作成に成功しました。');
        }
    }

    // 物理削除なし
    public function delete() {
        return view('Order.index');
    }
}
