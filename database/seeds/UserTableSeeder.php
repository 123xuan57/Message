<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->delete();
        //往用户表插入测试数据
        User::create([
        	'name' => 'wsg',
        	'email' => '123456@qq.com',
        	'password' => bcrypt('123456'),
        	]);
    }
}
