<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++){
            DB::table('users')->insert([
                'id' => $i,
                'name' => 'ZY' . $i,
                'email' => 'ZY' .$i .'@qq.com',
                'password' => bcrypt('123123'), // hash加密
                'remember_token' => str_random(10),
            ]);
        }
        DB::table('users')->insert([
            [
                'id' => 11,
                'name' => '张三',
                'email' => 'zhangsan@163.com',
                'password' => bcrypt('123123'), // hash加密
                'remember_token' => str_random(10),
            ],
            [
                'id' => 12,
                'name' => '李四',
                'email' => 'lisi@163.com',
                'password' => bcrypt('123123'), // hash加密
                'remember_token' => str_random(10),
            ],
            [
                'id' => 13,
                'name' => '王五',
                'email' => 'wangwu@163.com',
                'password' => bcrypt('123123'), // hash加密
                'remember_token' => str_random(10),
            ],
            [
                'id' => 14,
                'name' => '赵六',
                'email' => '赵六@163.com',
                'password' => bcrypt('123123'), // hash加密
                'remember_token' => str_random(10),
            ],
            [
                'id' => 15,
                'name' => 'Bob',
                'email' => 'Bob@163.com',
                'password' => bcrypt('123123'), // hash加密
                'remember_token' => str_random(10),
            ],
        ]);
    }
}
