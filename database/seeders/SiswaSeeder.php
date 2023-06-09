<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'name' => 'saady',
            'jurusan' => 'pplg',
            'kelas' => 'Xl',
            'nis' => '005657463',
        ]);
    }
}
