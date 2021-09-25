<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Grad;
use Illuminate\Support\Facades\DB;

class GradSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grads')->insert(
            [
                ['imegrada' => 'Beograd'],
                ['imegrada' => 'Novi Sad'],
                ['imegrada' => 'Nis']
            ]
        );
    }
}
