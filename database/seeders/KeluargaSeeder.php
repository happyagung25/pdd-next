<?php

namespace Database\Seeders;

use App\Models\Kependudukan\Keluarga;
use Illuminate\Database\Seeder;

class KeluargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keluarga::factory()
            ->times(10)
            ->hasAnggota(5)
            ->create();

        $this->call(KepalaKeluargaSeeder::class);
    }
}
