<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('superadmin')->insert([
            'name'=>'mansi',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123123')
        ]);
    }
}
