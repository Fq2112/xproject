<?php

use Illuminate\Database\Seeder;
use App\Lomba;

class JenisLombaSeeder extends Seeder
{

    private $daftar = [
        ['ifc', 'Informatics Futsal Competition'],
        ['logicwar', 'Logic War'],
        ['wdc', 'Wallpaper Design Competition'],
        ['ipc','Informatics Photography Competition'],
        ['animasi', 'Animasi'],
        ['bisnis', 'Pengembangan Bisnis'],
        ['game', 'Pengembangan Game'],
        ['web', 'Web Design'],
        ['pes', 'PES 2017']
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->daftar as $lomba){
            Lomba::create([
                'nama' => $lomba[1],
                'kode' => $lomba[0]
            ]);
        }
    }
}
