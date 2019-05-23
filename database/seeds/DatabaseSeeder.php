<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // 商品
        $this->call(ProductsTableSeeder::class);
        //取引先
        $this->call(SuppliersTableSeeder::class);
        // 定義
        $this->call(DefinitionsSeeder::class);
        // 定義アイテム
        $this->call(DefinitionItemsSeeder::class);
    }
}
