<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'code' => '4902777015927',
                'name' => '明治 ミルクチョコレート',
                'abbreviation' => 'チョコレート',
                'category' => 1,
                'unit' => 7,
                'unit_selling_price' => 100,
                'unit_price' => 80,
                'image_url' => 'miji.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'code' => '1923055034204',
                'name' => '基礎から学ぶ Vue.js',
                'abbreviation' => '猫本',
                'category' => 6,
                'unit' => 4,
                'unit_selling_price' => 3200,
                'unit_price' => 1600,
                'image_url' => 'cat_book.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'code' => '1923055033801',
                'name' => 'Vue.js 入門　基礎から実践アプリケーション開発まで',
                'abbreviation' => 'Vue.js 入門',
                'category' => 6,
                'unit' => 4,
                'unit_selling_price' => 3380,
                'unit_price' => 1600,
                'image_url' => 'vue.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'code' => '1923055030008',
                'name' => 'Vue.js & Nuxt.js超入門',
                'abbreviation' => 'Vue.js 入門',
                'category' => 6,
                'unit' => 4,
                'unit_selling_price' => 3240,
                'unit_price' => 1600,
                'image_url' => 'vue2.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'code' => '1923055030008',
                'name' => 'Nuxt.jsビギナーズガイド―Vue.js ベースのフレームワークによるシングルページアプリケーション開発',
                'abbreviation' => 'next.js 入門',
                'category' => 6,
                'unit' => 4,
                'unit_selling_price' => 3240,
                'unit_price' => 1600,
                'image_url' => 'vue3.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'code' => '',
                'name' => 'Flutter×Firebaseで始めるモバイルアプリ開発',
                'abbreviation' => 'Flutter×Firebase 入門',
                'category' => 6,
                'unit' => 4,
                'unit_selling_price' => 2200,
                'unit_price' => 1600,
                'image_url' => 'flutter1.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'code' => '4798055832',
                'name' => 'Android/iOSクロス開発フレームワーク Flutter入門',
                'abbreviation' => 'Flutter×Firebase 入門',
                'category' => 6,
                'unit' => 4,
                'unit_selling_price' => 2200,
                'unit_price' => 1600,
                'image_url' => 'flutter2.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
