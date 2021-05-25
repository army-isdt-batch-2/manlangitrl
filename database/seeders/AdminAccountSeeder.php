<?php

namespace Database\Seeders;
use DB, Carbon;  
use Illuminate\Database\Seeder;

class AdminAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'      => 'Super Admin',
            'username'  => 'admin',
            'password'  =>bcrypt('123456'),
            'created_at' =>Carbon\Carbon::now(),
            'updated_at'=>Carbon\Carbon::now()
        ]);
    
    }
}
