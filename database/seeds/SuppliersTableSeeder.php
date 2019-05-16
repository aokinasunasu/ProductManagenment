<?php

use Illuminate\Database\Seeder;

class SuppliersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('suppliers')->insert([
            [
                'display_order' => '10',
                'name' => '福岡美野島ローソン1号',
                'abbreviation' => '美野島ローソン1号',
                'contact_name' => '美野島太郎',
                'post_code' => 'XXX-XXXX',
                'street_address1' => '福岡県福岡市美野島',
                'street_address2' => 'X町3号',
                'tel1' => 'XXX-XXXX-XXXX',
                'tel2' => 'XXX-XXXX-XXXX',
                'fax_number' => 'XXX-XXXX-XXXX',
                'e-mail' => 'XXX@test.com',
                'url' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => '20',
                'name' => '福岡住吉ローソン1号',
                'abbreviation' => '美野島ローソン1号',
                'contact_name' => '住吉太郎',
                'post_code' => 'XXX-XXXX',
                'street_address1' => '福岡県福岡市住吉',
                'street_address2' => 'X町3号',
                'tel1' => 'XXX-XXXX-XXXX',
                'tel2' => 'XXX-XXXX-XXXX',
                'fax_number' => 'XXX-XXXX-XXXX',
                'e-mail' => 'XXX@test.com',
                'url' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => '30',
                'name' => '福岡中洲ローソン1号',
                'abbreviation' => '中洲ローソン1号',
                'contact_name' => '中洲太郎',
                'post_code' => 'XXX-XXXX',
                'street_address1' => '福岡県福岡市中洲',
                'street_address2' => 'X町3号',
                'tel1' => 'XXX-XXXX-XXXX',
                'tel2' => 'XXX-XXXX-XXXX',
                'fax_number' => 'XXX-XXXX-XXXX',
                'e-mail' => 'XXX@test.com',
                'url' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => '40',
                'name' => '福岡博多ローソン1号',
                'abbreviation' => '博多ローソン1号',
                'contact_name' => '博多太郎',
                'post_code' => 'XXX-XXXX',
                'street_address1' => '福岡県福岡市博多',
                'street_address2' => 'X町3号',
                'tel1' => 'XXX-XXXX-XXXX',
                'tel2' => 'XXX-XXXX-XXXX',
                'fax_number' => 'XXX-XXXX-XXXX',
                'e-mail' => 'XXX@test.com',
                'url' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'display_order' => '50',
                'name' => '福岡天神ローソン1号',
                'abbreviation' => '天神ローソン1号',
                'contact_name' => '天神太郎',
                'post_code' => 'XXX-XXXX',
                'street_address1' => '福岡県福岡市天神',
                'street_address2' => 'X町3号',
                'tel1' => 'XXX-XXXX-XXXX',
                'tel2' => 'XXX-XXXX-XXXX',
                'fax_number' => 'XXX-XXXX-XXXX',
                'e-mail' => 'XXX@test.com',
                'url' => '',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
