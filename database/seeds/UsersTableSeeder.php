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
                'remember_token' => 'sGQV2HFSRqtDHuTpjrhgUciznw1kfE8cyPi5J9rP1sIBfZLO9TUlTjpmFo89',
                'created_at' => '0000-00-00 00:00:00',
                'updated_at' => '2016-02-09 16:10:01',
            ),
        ));
        
        
    }
}
