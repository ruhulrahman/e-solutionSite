<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	array(
        		'name' => 'Mazbaul Kamal',
        		'email' => 'mazba@gmail.com',
        		'password' => md5('123'),
        		'post' => 'HR Admin',
        		'phone' => '01636-084886',
        	),
        	array(
        		'name' => 'Mohammad Golam Mostafa',
        		'email' => 'mdgolammostafa21@gmail.com',
        		'password' => md5('123'),
        		'post' => 'Hardware and Network Administrator',
        		'phone' => '01816-096694',
        	),
        	array(
        		'name' => 'Rakibul Islam',
        		'email' => 'cstrakib@gmail.com',
        		'password' => md5('123'),
        		'post' => 'Hardware and Network manager',
        		'phone' => '01813-232300',
        	),
        	array(
        		'name' => 'Bulbul Ahmed',
        		'email' => 'bulbulahmedfaruk@gmail.com',
        		'password' => md5('123'),
        		'post' => 'Cheif Account Manager',
        		'phone' => '01924-350670',
        	)
        	]);
    }
}
