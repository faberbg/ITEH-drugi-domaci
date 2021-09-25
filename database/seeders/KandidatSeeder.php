<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kandidat;
use Illuminate\Support\Facades\DB;

class KandidatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kandidats')->insert(
            [
                ['ime' => 'David', 'prezime' => 'Edelinski', 'email' => 'david@elab.rs', 'firma_id' => 1],
                ['ime' => 'Marko', 'prezime' => 'Petrovic', 'email' => 'marko@elab.rs', 'firma_id' => 2],
                ['ime' => 'Petar', 'prezime' => 'Petrovic', 'email' => 'petar@elab.rs', 'firma_id' => 3]
            ]
        );
    }
}
