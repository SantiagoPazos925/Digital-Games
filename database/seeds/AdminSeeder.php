<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'fullname' => 'Administrador',
            'nick'=> 'ADMIN',
            'country'=> 'Argentina',
            'image'=> '/proyecto/Proyecto/TpFinal/images/profile.png',
            'email'=> 'admin@admin.com',
            'platform'=>'PC' ,
            'password'=> Hash::make('123123'),
              ]);
    }
}
