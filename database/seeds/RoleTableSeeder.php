<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::Create(['name' => 'admin']);
        Role::Create(['name' => 'author']);
        Role::Create(['name' => 'user']);
        //
    }
}
