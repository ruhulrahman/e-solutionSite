<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('tbl_category')->insert([array(
	            'categoryName' => 'Technology',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'Electronics',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'Bangladesh',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'International',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'Health',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'Sports',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'Crime',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'General Knowledge',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'Entertainment',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'Law',
	            'publication_status' => 1,
	        ),array(
	            'categoryName' => 'Politics',
	            'publication_status' => 1,
	        )
	    ]);



    }
}
