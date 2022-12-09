<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Klien;
use App\Models\Project;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        //
        Klien::create([
            'nama' => 'Pemkab Bantul', 
            'no_telpon' => '081225027507',
            'alamat' => 'Bantul, Yogyakarta',
            'email' => 'pemkabbantul@gmail.com',
            'website' => 'pemkabbantul.com',
            'deskripsi' => 'lorem ipsum',
            'id_user' => 3
        ]);

        Project::create([
            'nama' => 'Sistem Informasi Absensi Pegawai', 
            'deskripsi' => 'lorem ipsum',
            'tgl_mulai' => Carbon::create('2022', '12', '1'),
            'tgl_selesai' => Carbon::create('2022', '12', '25'),
            'deadline' => Carbon::create('2022', '12', '30'),
            'budget' => 500000000,
            'status' => 'On Progress',
            'id_klien' => 1,
            'id_user' => 3
        ]);

    }
}
