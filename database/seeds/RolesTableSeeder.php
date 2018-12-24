<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // super-admin
        Role::create([
        	'name' => 'super_admin_role',
        	'display_name' => "Super Admin",
        	'description' => "Administrator"
        ]);

        // admin
        Role::create([
        	'name' => 'admin_role',
        	'display_name' => "Admin",
        	"description" => "Administrator"
        ]);

        // cashier
        Role::create([
        	'name' => 'cashier_role',
        	'display_name' => "Cashier",
        	'description' => "Cashier"
        ]);
    }
}
