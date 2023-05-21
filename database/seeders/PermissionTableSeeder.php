<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Spatie\Permission\Models\Role;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'member-list',
           'member-create',
           'member-edit',
           'member-delete',
           'setting-list',
           'setting-edit',
           'klien',
           'project',
           'tim',
           'task-pm',
           'task-anggota',
           'komentar',
        ];

        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
       }

        // for anggota
        $anggotaRole = Role::create(['name' => 'anggota']);
        $anggotaRole->givePermissionTo(['task-anggota', 'komentar']);

        $user = User::factory()->create([
            'name' => 'tofan',
            'email' => 'tofan@gmail.com',
            'password' => bcrypt('12345678'),
            'no_hp' => '081225027507'
        ]);
        $user2 = User::factory()->create([
            'name' => 'tofan2',
            'email' => 'tofan2@gmail.com',
            'password' => bcrypt('12345678'),
            'no_hp' => '081225027507'
        ]);
        
        $user->assignRole($anggotaRole);
        $user2->assignRole($anggotaRole);

        // for pm
        $pmRole = Role::create(['name' => 'pm']);
        $pmRole->givePermissionTo(['tim','task-pm', 'komentar']);

        $pm = User::factory()->create([
            'name' => 'bagus',
            'email' => 'bagus@gmail.com',
            'password' => bcrypt('12345678'),
            'no_hp' => '081225027507'
        ]);
        $pm2 = User::factory()->create([
            'name' => 'bagus2',
            'email' => 'bagus2@gmail.com',
            'password' => bcrypt('12345678'),
            'no_hp' => '081225027507'
        ]);

        $pm->assignRole($pmRole);
        $pm2->assignRole($pmRole);

        
    }
}