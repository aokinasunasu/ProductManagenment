<?php

use Illuminate\Database\Seeder;

class DefinitionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('definitions')->insert([
            [
                'name' => 'product_id',
                'displey_name' => 'ID',
                'defult_name' => 'ID',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'product_code',
                'displey_name' => 'code',
                'defult_name' => 'code',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'product_category',
                'displey_name' => 'カテゴリ',
                'defult_name' => 'カテゴリ',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'product_name',
                'displey_name' => '名前',
                'defult_name' => '名前',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'product_abbreviation',
                'displey_name' => '略語',
                'defult_name' => '略語',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'product_image',
                'displey_name' => '画像',
                'defult_name' => '画像',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'suppliers_id',
                'displey_name' => '取引先名',
                'defult_name' => '取引先名',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'suppliers_name',
                'displey_name' => '取引先名',
                'defult_name' => '取引先名',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'suppliers_abbreviation',
                'displey_name' => '取引先略名',
                'defult_name' => '取引先略名',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'suppliers_contact_name',
                'displey_name' => '担当者名',
                'defult_name' => '担当者名',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'suppliers_street_address1',
                'displey_name' => '住所1',
                'defult_name' => '住所1',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'suppliers_street_address2',
                'displey_name' => '住所2',
                'defult_name' => '住所2',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'suppliers_tel1',
                'displey_name' => '電話番号1',
                'defult_name' => '電話番号1',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'suppliers_tel2',
                'displey_name' => '電話番号2',
                'defult_name' => '電話番号2',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'orders_id',
                'displey_name' => 'ID',
                'defult_name' => 'ID',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'orders_type',
                'displey_name' => 'タイプ',
                'defult_name' => 'タイプ',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'orders_name',
                'displey_name' => '注文名',
                'defult_name' => '注文名',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'order_items_name',
                'displey_name' => '商品',
                'defult_name' => '商品',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'order_items_price',
                'displey_name' => '価格',
                'defult_name' => '価格',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'order_items_num',
                'displey_name' => '数量',
                'defult_name' => '数量',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'selling_price',
                'displey_name' => '販売単価',
                'defult_name' => '販売単価',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'purchase_price',
                'displey_name' => '原単価',
                'defult_name' => '原単価',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'unit',
                'displey_name' => '単位',
                'defult_name' => '単位',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),   
            ],
            [
                'name' => 'category',
                'displey_name' => 'カテゴリ',
                'defult_name' => 'カテゴリ',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'display_order',
                'displey_name' => '表示順',
                'defult_name' => '表示順',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'post_code',
                'displey_name' => '郵便番号',
                'defult_name' => '郵便番号',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'url',
                'displey_name' => 'url',
                'defult_name' => 'url',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'fax_number',
                'displey_name' => 'Fax番号',
                'defult_name' => 'Fax番号',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'e-mail',
                'displey_name' => 'e-mail',
                'defult_name' => 'e-mail',
                'type' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}


            // $table->string('name');
            // $table->string('displey_name');
            // $table->string('defult_name');
            // $table->integer('type');
            // $table->integer('system_kbn');
    // 'DEFINITONS_TYPE' => [
    //     0 => '項目',
    //     1 => 'メッセージ',
    //     2 => '選択',
    //     3 => 'ページ',
    // ]

                        //  [

            // ],