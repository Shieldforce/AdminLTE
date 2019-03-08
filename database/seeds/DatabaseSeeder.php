<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\System\Roles\Roles;
use App\User;
use App\Models\System\Permissions\Permissions;


class DatabaseSeeder extends Seeder
{
    //------------------------------------------------------------------------------------------------------------------
    public function run()
    {
        $this->call('RoleTableSeeder');
        $this->call('UserTableSeeder');
        $this->call('PermissionTableSeeder');
    }
}
class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        $role1 = Roles::create([
            'id'=>1,
            'name'=>'Administrador',
            'label'=>'Administrador do Sistema',
            'group'=>1,
        ]);

        $role2 = Roles::create([
            'id'=>2,
            'name'=>'Gerente',
            'label'=>'Gerente do Sistema',
            'group'=>1,
        ]);
    }

}
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user1 = User::create([
            'role_id'=>1,
            'name'=>'Administrador',
            'email'=>'admin@shieldforce',
            'password'=>bcrypt('admin'),
        ]);
    }

}
class PermissionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('permissions')->delete();

        $permission1 = Permissions::create([
            'name'=>'Show-Principal',
            'label'=>'Pode Acessar o Painel de Controle',
            'group'=>1,
        ]);
        //-------------------------------
        $permission1->roles()->sync([2]);
    }

}

