<?php
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
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
                'name'=>'cristales',
                'description'=>'descriccion de cristaleria'
            ],
            [
                'name'=>'ferreteria',
                'description'=>'descriccion de ferreteria'
            ],
            [
                'name'=>'ropa',
                'description'=>'descriccion de ropa'
            ],
        ];
        foreach($items as $key => $value){
            Category::create($value);
        }
    }
}
