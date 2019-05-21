<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Order;
use Carbon\Carbon;
use App\Product;
use App\Suppliers;
use App\OrderItem;

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

    public function edit(Request $request) {
        $id = $request['id'];
        $order = Order::find($id);
        $itmes = $order->getItems;
        $const = config('const');
        $date = Carbon::now()->format('Y-m-d\TH:i');
        $suppliers = Suppliers::all();
        $products = Product::all();

        return response()->json([
            'view' => view('Order.edit',[
                'const' => $const,
                'order' => $order,
                'date' => $date,
                'itmes' => $itmes,
                'suppliers' => $suppliers,
                'products' => $products,
            ])->render(),
            'itmes' => $itmes,
        ]);
    }

    public function items_new(Request $request) {

        $itmes = $request->order_items;
        // TODO 表示方法
        $products = Product::all();
        $item = [
            'product_id' => '',
            'price' => 0,
            'num' => 0,
            'delete_flg' => false,
        ];

        $itmes[] = $item;

        return response()->json([
            'view' => view('Order.items_list_table',[
                'itmes' => $itmes,
                'products' => $products,
            ])->render(),
            'itmes' => $itmes,
        ]);
    }

    public function update(Request $request) {

        $order_form = $request->order;
        $items_form = $request->order_items;

        \Log::info($items_form);

        DB::beginTransaction();
        try {
            if ($order_form['id'] == null) {
                // 注文データ作成
                $order = new Order;
                $order->fill($order_form)->save();
            } else {
                // 注文データ作成
                $order = Order::find($order_form['id']);
                $order->fill($order_form)->save();
            }

            // 明細情報の作成
            $order_items = new OrderItem;
            $order_items->create($order->id, $items_form);
            DB::commit();
        } catch (\Exception $e) {
            \log::info($e);
            DB::rollback();
        }
        // 注文の一覧再取得
        $const = config('const');
        $itmes = Order::all();

        return response()->json([
            'view' => view('Order.order_table',[
                'itmes' => $itmes,
                'const' => $const,
            ])->render(),
        ]);
    }

    // 物理削除なし
    public function delete() {
        return view('Order.index');
    }
}
