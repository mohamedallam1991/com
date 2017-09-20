<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'dealer',
            'display_name' => 'Dealer',
            'description' => 'A dealer that sells our products'
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'display_name' => 'Admin',
            'description' => 'A user that maintains the site'
        ]);
    }
}
