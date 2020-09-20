<?php

namespace Database\Seeders;

use App\Models\Cluster\Penduduk;
use App\Models\Penduduk\Keluarga;
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
            ->create()
            ->each(function($keluarga)
            {
                $penduduk = Penduduk::factory()->times(5)->make();
                $keluarga->anggota()->saveMany($penduduk);
            });
    }
}
