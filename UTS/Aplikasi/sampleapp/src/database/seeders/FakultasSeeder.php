<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fakultas; 

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Departemen' => 'Teknik Informatika', 'Dosen' => 'Pa Bagas', 'Mahasiswa' => 'Raja Indera', 'MataKuliah' => 'Basis Data', 'availability' => 'Mahasiswa Aktif'],
            ['Departemen' => 'Sastra Mesin', 'Dosen' => 'Pa Raja', 'Mahasiswa' => 'Genta Pratama', 'MataKuliah' => 'Kalkulus', 'availability' => 'Mahasiswa Aktif'],
            ['Departemen' => 'Kesehatan', 'Dosen' => 'Bu Dwi', 'Mahasiswa' => 'Dwika', 'MataKuliah' => 'Anatomi', 'availability' => 'Mahasiswa Tidak Aktif'],
        ];

        foreach ($data as $datares) {
            Fakultas::firstOrCreate($datares);
        }
    }
}
