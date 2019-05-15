<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Order;
use Carbon\Carbon;
use App\Product;
use App\Suppliers;
use App\OrderDetails;

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
        $itmes = $order->getDetails;
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

    public function details_new(Request $request) {

        $itmes = $request->order_details;
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
            'view' => view('Order.details_list_table',[
                'itmes' => $itmes,
                'products' => $products,
            ])->render(),
            'itmes' => $itmes,
        ]);
    }

    public function update(Request $request) {

        $order_form = $request->order;
        $details_form = $request->order_details;


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
            $order_details = new OrderDetails;
            $order_details->create($order->id, $details_form);
            DB::commit();
        } catch (\Exception $e) {
            \log::info($e);
            DB::rollback();
        }

        return  response('sucess', 200);
    }

    // 物理削除なし
    public function delete() {
        return view('Order.index');
    }
}
