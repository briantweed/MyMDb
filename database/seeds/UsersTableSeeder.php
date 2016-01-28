<?php

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
                'name' => 'Brian Tweed',
                'email' => 'brtweed@outlook.com',
                'password' => '$2y$10$9AKzOHxWzlL3qWWVGibbG.OKeM3oLajo3RLMiFBys2THABAxJfQQK',
                'level' => 1,
                'remember_token' => 'A6cM4rW2fdZO3i8fvMM7JHrU6cXpJgU5TOa1poo0EjN7h2nyOXQ99mBnGb15',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2016-01-28 16:00:00',
            ),
        ));
        
        
    }
}
