<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\models\User;
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
            'name' => 'Obada Admin',
            'email' => 'admin01@gmail.com',
            'password' => bcrypt('123123123'),
            'roles_name' => ["owner"],
            'status' => 'مفعل'
        ]);

        $role = Role::create(['name' => 'owner']);
        $permission = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permission);
        $user->assignRole([$role->id]);
    }
}
