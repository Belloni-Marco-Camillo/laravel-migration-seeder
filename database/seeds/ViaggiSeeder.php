<?php

use Illuminate\Database\Seeder;
use App\viaggi;

class ViaggiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $viaggis = config('db.viaggio');
        

        foreach ($viaggis as $viaggio) {
            $nuovo_viaggio = new Viaggi();
            $nuovo_viaggio->luogo =$viaggio['luogo'];
            $nuovo_viaggio->giorni =$viaggio['giorni'];
            $nuovo_viaggio->immagine =$viaggio['immagine'];
            $nuovo_viaggio->save();
        }
    }
}
