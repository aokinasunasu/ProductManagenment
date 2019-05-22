<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Definition extends Model
{
    //
    protected $guarded = ['name'];
    public $incrementing = false;
    protected $primaryKey = 'name';

    /**
     *  項目定義取得
     * @param array $list
     * @param array $array_flg
     * 
     * @return mixed
     */
    public function getItemDefinitions(array $list, bool $array_flg){
        

        $tmp = $this->where('type', '=' ,0)->whereIn('name',$list)->get();
        $items = [];
        // 変換
        if ($array_flg) {

            foreach ($tmp as $row) {
                $items[$row->name] = $row->displey_name;
            }

        } else {
            $items = $tmp;
        }
        return $items;
    }
}
