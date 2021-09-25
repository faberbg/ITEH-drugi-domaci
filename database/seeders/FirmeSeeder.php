<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Firme;
use Illuminate\Support\Facades\DB;

class FirmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // grad_id 1 BG , 2 NS, 3 NI   ['naziv' => 'StuntCoders', 'opis' => '', 'pozicija' => 'PHP DEVELOPER', 'grad_id' => 1],
        DB::table('firmes')->insert(
            [
                ['naziv' => 'StuntCoders', 'opis' => 'Pozicionirali smo se u e-commerce svetu 2010. godine. Sa više od 8 godina iskustva u razvoju e-commerce rešenja, apsolutno razumemo svaki segment procesa njegove izgradnje.', 'pozicija' => 'PHP Developer', 'grad_id' => 1],
                ['naziv' => 'TeleSign', 'opis' => 'TeleSign povezuje i štiti iskustva korisnika na internetu pomoću sofisticiranih rešenja digitalnog identiteta i programabilnih komunikacija.', 'pozicija' => 'Data Scientist', 'grad_id' => 1],
                ['naziv' => '3LATERAL', 'opis' => '3Lateral develops innovative technologies that enable digitization of human appearance and motion at an unprecedented level of realism. 3Lateral has been recognized as a pioneer in the gaming industry.', 'pozicija' => 'Engine Programmer', 'grad_id' => 2],
                ['naziv' => 'Ascendik', 'opis' => 'Ascendik is a world-leading health & fitness mobile software development company based in Niš, Serbia. Our goal is to help not only our users, but also our employees in creating healthy habits.', 'pozicija' => 'Android Developer', 'grad_id' => 3]
            ]
        );
    }
}
