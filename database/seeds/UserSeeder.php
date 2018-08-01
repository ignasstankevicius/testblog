<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = '$2y$10$K2MRpQ6rXkLGO1cwGyJbH.3VzZFGuCFGPTVmP0Fp9JRzfwIeJ63DW';
        $admin->save();
    }
}
