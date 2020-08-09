<?php

use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items =[
            [
                'name'=>'vaso',
                'price'=>25.3,
                'stock'=>10,
                'category_id'=>1
            ],
            [
                'name'=>'plato',
                'price'=>25.3,
                'stock'=>10,
                'category_id'=>1
            ],
            [
                'name'=>'cable',
                'price'=>25.3,
                'stock'=>10,
                'category_id'=>2
            ],
            [
                'name'=>'ventana',
                'price'=>25.3,
                'stock'=>10,
                'category_id'=>1
            ],
        ];
        foreach($items as $key => $value){
            Product::create($value);
        }
    }
}
