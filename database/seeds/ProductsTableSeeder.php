<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        	'name' => 'Playsation',
            'slug' => 'playsation',
        	'price' => '500',
        	'image' => 'default.png',
        	'model' => 'YXD-YEG02',
            'caracteristicas' => 'es bien vergon',
        	'cantidad' => '10',
        	'tamaño' => '12',
        	'brand_id' => '1',
        	'category_id' => '4',
        	'user_id' => '1',
        ]);
    }
}
