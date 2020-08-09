<?php

use Illuminate\Database\Seeder;
use App\Models\Bill;
class BillSeeder extends Seeder
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
                'user_id'=>2,
                'date'=>'2014-06-26'
            ],
            [
                'user_id'=>2,
                'date'=>'2014-06-26'
            ],
            [
                'user_id'=>2,
                'date'=>'2014-06-26'
            ],
        ];
        foreach($items as $key => $value){
            Bill::create($value);
        }
    }
}
