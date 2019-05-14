<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Carbon\Carbon;
use App\Product;
use App\Suppliers;

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
        $date = Carbon::now()->format('Y-m-d\TH:i');
        $suppliers = Suppliers::all();
        return response()->json([
            'view' => view('Order.new',[
                'const' => $const,
                'date' => $date,
                'itmes' => [],
                'suppliers' => $suppliers,
            ])->render()
        ]);
    }

    public function details_new(Request $request) {

        $items = $request->order_details;
        // TODO 表示方法
        $products = Product::all();
        \Log::info($products);

        $item = [
            'product_id' => '',
            'price' => 0,
            'num' => 0,
            'delete_flg' => false,
        ];

        $items[] = $item;

        return response()->json([
            'view' => view('Order.details_list_table',[
                'itmes' => $items,
                'products' => $products,
            ])->render(),
            'itmes' => $items,
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
        \Log::info($request);
        \Log::info("hh");
        return 0;
    }

    // 物理削除なし
    public function delete() {
        return view('Order.index');
    }
}
