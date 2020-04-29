<?php
 use Illuminate\Database\Seeder;
 use App\Level;

 class LevelTableSeeder extends Seeder
 {
     public function run()
     {
         $data = [
             ['id_level' => 1, 'nama_level' => 'kasir'],
             ['id_level' => 2, 'nama_level' => 'admin'],
             ['id_level' => 3, 'nama_level' => 'owner'],
             ['id_level' => 4, 'nama_level' => 'waiter'],
         ];
         
         Level::insert($data);
     }
 }