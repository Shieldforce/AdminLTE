<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;


class DatabaseSeeder extends Seeder
{
    //------------------------------------------------------------------------------------------------------------------
    public function run()
    {
        $this->call('UserTableSeeder');
    }
}
class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        $user = User::create([
            'name'=>'Administrador',
            'email'=>'admin@shieldforce',
            'password'=>bcrypt('admin'),
        ]);
    }

}

