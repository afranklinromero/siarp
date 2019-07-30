<?php

use Illuminate\Database\Seeder;
use App\Person;
use Illuminate\Support\Facades\DB;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Person::create([
            'ci' => '12345',
            'nombres' => 'alfredo',
            'apellidos' => 'montoya calderon',
            ]);
        factory(Person::class, 49)->create();
    }
}
