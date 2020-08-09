<?php
use App\Models\Detail;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
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
                'bill_id'=>1,
                'product_id'=>1,
                'quantity'=>2132,
                'price'=>12.3
            ],
            [
                'bill_id'=>1,
                'product_id'=>2,
                'quantity'=>2132,
                'price'=>12.3
            ],
            [
                'bill_id'=>1,
                'product_id'=>2,
                'quantity'=>2132,
                'price'=>12.3
            ],
        ];
        foreach($items as $key => $value){
            Detail::create($value);
        }
    }
}
