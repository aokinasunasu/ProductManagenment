<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Product;
use App\Definition;

class ProductsController extends Controller
{

    public function index(Request $request) {

        // TODO 検索フォーム ページネーション
        $const = config('const');
        $itmes = Product::all();
        $definitions = $this->getDefinition();
        return view('Product.index',[
            'itmes' => $itmes,
            'const' => $const,
            'definitions' => $definitions
        ]);
    }

    public function new() {
        $const = config('const');
        $definitions = $this->getDefinition();
        return view('Product.new',[
            'const' => $const,
            'definitions' => $definitions
        ]);
    }

    public function edit(Request $request) {

        // データ取得
        try {

            $id = $request->id;
            $form = Product::find($id);
            $const = config('const');
            $definitions = $this->getDefinition();

        } catch (Exception $e) {
            return redirect('/product')->with('alert_message', 'データの取得に失敗しました');
            // echo '捕捉した例外: ',  $e->getMessage(), "\n";
        }
        return view('Product.edit',[
            'form' => $form,
            'const' => $const,
            'definitions' => $definitions
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
            if ($request->file('image_url')) {
                // 画像アップロード
                $file = $request->file('image_url');
                $fileName = str_random(20).'.'.$file->getClientOriginalExtension();
                Image::make($file)->save(public_path('storage/'.$fileName));
                $form['image_url'] = $fileName;
            }
            $product->fill($form)->save();
            return redirect('/product')->with('success_message', 'データの更新に成功しました。');
        } else {
            $product = new Product;
            unset($form['_token']);
            if ($request->file('image_url')) {
                // 画像アップロード
                $file = $request->file('image_url');
                $fileName = str_random(20).'.'.$file->getClientOriginalExtension();
                Image::make($file)->save(public_path('storage/'.$fileName));
                $form['image_url'] = $fileName;
            }
            $product->fill($form)->save();
            return redirect('/product')->with('success_message', 'データの作成に成功しました。');
        }
    }

    // 物理削除なし
    public function delete() {
        return view('Product.index');
    }

    /**
     * 項目の定義一覧取得
     *
     * @return array
     */
    public function getDefinition() {

        $list = [
            'product_id',
            'product_code',
            'product_category',
            'product_name',
            'product_abbreviation',
            'product_image',
            'unit',
            'selling_price',
            'purchase_price',
        ];
        $definition = new Definition;

        $items = $definition->getItemDefinitions($list,true);

        return $items;
    }
}
