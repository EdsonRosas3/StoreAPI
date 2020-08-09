<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
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
                'name'=>'edson',
                'email'=>'edson.com',
                'direction'=>'direccion uno',
                'date_birth'=>'2018-02-02',
                'password'=>bcrypt('edson'),
                'phone'=>74119
            ],
            [
                'name'=>'rosas',
                'email'=>'rosas.com',
                'direction'=>'direccion dos',
                'date_birth'=>'2018-02-02',
                'password'=>bcrypt('rosas'),
                'phone'=>74118
            ],
            [
                'name'=>'edros',
                'email'=>'edros.com',
                'direction'=>'direccion tres',
                'date_birth'=>'2018-02-02',
                'password'=>bcrypt('edros'),
                'phone'=>74114
            ],
        ];
        foreach($items as $key => $value){
            User::create($value);
        }
    }
}
