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
       User::create([
       		'name'=>'büşra',
       		'last_name'=>'türk',
       		'TC_number'=>'41980987567',
       		'email'=>'büşratürk@gmail.com',
       		'role_id'=>1,
       		'active'=>1,
       		'department_id'=>1,
       		'password'=>bcrypt('türk'),
       		'remember_token'=> str_random(10),

       	]);
    }
}
