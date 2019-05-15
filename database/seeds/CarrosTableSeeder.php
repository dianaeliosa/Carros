<?php

use Illuminate\Database\Seeder;

class CarrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $carros = [
        	[
        		'marca'=>'Seat',
        		'modelo'=>2017,
        		'color'=>'Rojo'
        	],

        	[
        		'marca'=>'Suzuki',
        		'modelo'=>2019,
        		'color'=>'Amarillo'
        	],

        	[
        		'marca'=>'Nissan',
        		'modelo'=>2007,
        		'color'=>'Verde'
        	],

        	[
        		'marca'=>'Mazda',
        		'modelo'=>2005,
        		'color'=>'Negro'
        	],

        ];

        foreach ($carros as $carro){

        	App\Carro::create($carro);
        
        }
    }
}
