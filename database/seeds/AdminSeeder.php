<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('admin_tbl')->insert([array(
            'admin_name' => 'Ruhul Amin',
            'admin_email' => 'ruhulrahman2233@gmail.com',
            'admin_password' => md5('123'),
	        ),array(
	            'admin_name' => 'Ruhul',
	            'admin_email' => 'ruhul@gmail.com',
	            'admin_password' => md5('123'),
	        )
	    ]);


    }
}
