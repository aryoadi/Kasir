<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id_user' =>1,
                'username' => 'kasir',
                'password' => bcrypt('kasir123'),
                'nama_user'=>'kasir',
                'id_level' => 1,
            ],
            [
                'id_user' =>2,
                'username' => 'admin',
                'password' => bcrypt('admin123'),
                'nama_user'=>'admin',
                'id_level' => 2,
            ],
            [
                'id_user' =>3,
                'username' => 'owner',
                'password' => bcrypt('owner123'),
                'nama_user'=>'owner',
                'id_level' => 3,
            ],
            [
                'id_user' =>4,
                'username' => 'waiter',
                'password' => bcrypt('waiter123'),
                'nama_user'=>'waiter',
                'id_level' => 4,
            ]
        ];

        User::insert($data);
    }
}
