<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Klien;
use App\Models\Anggota;
use App\Models\Tim;
use App\Models\Task;
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
            'no_telpon' => '(0274) 367509',
            'alamat' => 'Jl. Robert Wolter Monginsidi No.1 Bantul, Yogyakarta, Indonesia 55711',
            'email' => 'diskominfo@bantulkab.go.id',
            'website' => 'https://bantulkab.go.id/',
            'deskripsi' => 'Bantul adalah sebuah wilayah kabupaten yang terletak di Daerah Istimewa Yogyakarta, Indonesia. Ibu kotanya adalah Kapanewon Bantul. Semboyan pembangunan kabupaten ini adalah Projotamansari, yang merupakan singkatan dari Produktif-Profesional, Ijo royo royo, Tertib, Aman, Sehat, dan Asri.',
            'id_user' => 5
        ]);

        Project::create([
            'nama' => 'Sistem Informasi Absensi Pegawai', 
            'deskripsi' => 'lorem ipsum',
            'tgl_mulai' => Carbon::create('2022', '12', '1'),
            'tgl_selesai' => Carbon::create('2022', '12', '25'),
            'deadline' => Carbon::create('2022', '12', '30'),
            'pm' => 3,
            'budget' => 500000000,
            'status' => 'On Progress',
            'id_klien' => 1,
            'id_user' => 5
        ]);

        Tim::create([
            'nama' => 'Front End Developer',
            'deskripsi' => 'lorem ipsum',
            'id_project' => 1,
            'id_user' => 3
        ]);

        Anggota::create([
            'id_tim' => 1,
            'id_users' => 1,
            'id_user' => 3
        ]);

        Task::create([
            'nama' => 'buat form',
            'deskripsi' => 'lorem ipsum',
            'type' => 'hard',
            'prioritas' => 'yes',
            'deadline' => Carbon::create('2022', '12', '30'),
            'id_anggota' => 1,
            'parent_id_task' => 1,
            'status' => 'done',
            'submit_task' => 'udah selesai'
        ]);

    }
}
