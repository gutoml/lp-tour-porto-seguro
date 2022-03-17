<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Guto',
                'email' => 'guto.leal@outlook.com.br',
                'email_verified_at' => NULL,
                'password' => '$2y$10$3xZU2g8/zZv/4vmC9LCOOOJyN2P4bnTZORJ1Punb0gsLz5O6cl4pq',
                'remember_token' => '8JKgzoXdjO2uZE8Fz9JSdnNKorcCouVvYDeHDI8IBBLA4Hh6Tixli8SJf4bw',
                'created_at' => '2022-02-22 14:10:53',
                'updated_at' => '2022-03-02 20:12:38',
            ),
        ));
        
        
    }
}