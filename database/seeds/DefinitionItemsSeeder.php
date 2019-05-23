<?php

use Illuminate\Database\Seeder;

class DefinitionItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('definition_items')->insert([
            [
                'display_order' => 10,
                'definition_name' => 'product_category',
                'value1' => 1,
                'value2' => '保守・サービス',
                'enabled_flg' => 1,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 20,
                'definition_name' => 'product_category',
                'value1' => 2,
                'value2' => '食品',
                'enabled_flg' => 1,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 30,
                'definition_name' => 'product_category',
                'value1' => 3,
                'value2' => '電化製品',
                'enabled_flg' => 1,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 40,
                'definition_name' => 'product_category',
                'value1' => 4,
                'value2' => '家具',
                'enabled_flg' => 1,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 50,
                'definition_name' => 'product_category',
                'value1' => 5,
                'value2' => 'オフィス用品',
                'enabled_flg' => 1,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 60,
                'definition_name' => 'product_category',
                'value1' => 6,
                'value2' => '日常用品',
                'enabled_flg' => 1,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 70,
                'definition_name' => 'product_category',
                'value1' => 7,
                'value2' => '本',
                'enabled_flg' => 1,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 80,
                'definition_name' => 'product_category',
                'value1' => 8,
                'value2' => 'その他',
                'enabled_flg' => 1,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 90,
                'definition_name' => 'product_category',
                'value1' => 9,
                'value2' => '未設定',
                'enabled_flg' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => 100,
                'definition_name' => 'product_category',
                'value1' => 10,
                'value2' => '未設定',
                'enabled_flg' => 0,
                'system_kbn' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}