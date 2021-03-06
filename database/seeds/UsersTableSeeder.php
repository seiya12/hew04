<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'       => '春太郎',
                'email'      => 'haltaro@gmail.com',
                'password'   => bcrypt('secretboy'),
                'point'      => 0,
                'img_url'    => '1',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => NULL,
            ],
            [
                'name'       => '春花子',
                'email'      => 'halhanako@gmail.com',
                'password'   => bcrypt('secretgirl'),
                'point'      => 900,
                'img_url'    => '2',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => NULL,
            ],
            [
                'name'       => '悪太郎',
                'email'      => 'warutaro@gmail.com',
                'password'   => bcrypt('secretwaru'),
                'point'      => 0,
                'img_url'    => '3',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
                'deleted_at' => new DateTime(),
            ],
        ]);
    }
}
