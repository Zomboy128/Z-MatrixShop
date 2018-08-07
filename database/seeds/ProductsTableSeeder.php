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
            'image' => 'default.png',
        	'name'=>'SmartTv Sony Bravia 4k "52',
        	'slug' => 'smarttv-sony-bravia-4k-"52',
        	'modelo' => 'LMSJ-1q23',
        	'Fecha_fabricacion' => '2018-07-24',
        	'Num_serie' => '12345-qazwsx',
        	'caracteristicas'=>'Tiene buena resolucion',
        	'Precio_venta' => '500',
        	'cantidad_ingresar' => '9',
        	'brand_id' => '1',
        	'category_id' => '18',
        ]);

        DB::table('products')->insert([
            'image' => 'default.png',
        	'name'=>'Televisor UHD 4K "72',
        	'slug' => 'televosir-uhd-4k-"t2',
        	'modelo' => 'lmkn-123-12',
        	'Fecha_fabricacion' => '2018-07-24',
        	'Num_serie' => '1qazx-2wsxc',
        	'caracteristicas'=>'es bien tri vergon La Resolucion',
        	'Precio_venta' => '600',
        	'cantidad_ingresar' => '15',
        	'brand_id' => '2',
        	'category_id' => '18',
        ]);
    }
}
