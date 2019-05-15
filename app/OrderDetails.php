<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    //
    protected $guarded = ['id'];

    // 明細作成
    public function create($order_id, $list) {

        $items = [];

        // データ削除
        DB::table('order_details')->where('order_id', '=', $order_id)->delete();
        foreach ($list as $item) {
            $save_flg = true;
            $item['order_id'] = $order_id;

            // 削除区分がTrueのものは削除
            if (isset($item['delete_flg'])) {
                if (!$item['delete_flg']) {
                    unset($item['delete_flg']);
                } else {
                    $save_flg = false;
                }
            }

            if ($save_flg) {
                unset($item['id']);
                unset($item['delete_flg']);
                unset($item['created_at']);
                unset($item['updated_at']);
                $items[] = $item;
            }
        }

        // データ登録
        DB::table('order_details')-> insert($items);

    }

}
