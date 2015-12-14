<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $existing = DB::table('users')->count();
      if( !$existing )
      {
         DB::table('users')->insert([
            'name' => 'Brian Tweed',
            'email' => 'brtweed@outlook.com',
            'password' => '$2y$10$9AKzOHxWzlL3qWWVGibbG.OKeM3oLajo3RLMiFBys2THABAxJfQQK',
            'level' => '1'
         ]);
      }
    }
}
