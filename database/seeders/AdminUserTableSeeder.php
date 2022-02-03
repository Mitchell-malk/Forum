<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        DB::table('admin_users')->insert([
            ['id' => '1','name' => 'ZY','password' => bcrypt('123123'),],// bcrypt为hash加密
            ['id' => '2','name' => 'admin','password' => bcrypt('admin'),],// bcrypt为hash加密
            ['id' => '3','name' => 'admin123','password' => bcrypt('admin123'),]// bcrypt为hash加密
        ]);
    }
}