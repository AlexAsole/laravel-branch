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
        for($i=0; $i<4; $i++ ) {
            $beer = new Beer();
            $beer->name = 'alextestadiminchia';
            $beer->price='15';
            $beer->save();
        }

    }
}
