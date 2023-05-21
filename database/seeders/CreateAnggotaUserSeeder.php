<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class CreateAnggotaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'TofanBagusA', 
            'email' => 'bagustofan@yahoo.com',
            'password' => bcrypt('tofan123'),
            'no_hp' => '081225027507',
            'role' => 'anggota'
        ]);
    }
}
