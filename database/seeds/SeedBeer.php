<?php

use Illuminate\Database\Seeder;
use App\Beer;

class SeedBeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 4; $i++) {
            $beer = new Beer();
            $beer->name = 'fabiotestadiminchia';
            $beer->price = '12';
            $beer->save();
        }
    }
}
