<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
  
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'FikriDev', 
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'no_hp' => '081225027507',
        ]);
        
        $role = Role::create(['name' => 'Admin']);
        $role->givePermissionTo(['role-list', 'role-create', 'role-edit', 'role-delete', 'member-list', 'member-create', 'member-edit', 'member-delete', 'setting-list', 'setting-edit', 'klien', 'project']);
        // $permissions = Permission::pluck('id','id')->all();
   
        // $role->syncPermissions($permissions);
     
        $user->assignRole([$role->id]);
    }
}