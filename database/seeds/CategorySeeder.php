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
	    if(DB::table('users')->get()->count() == 0){

		    DB::table('tbl_category')->insert([array(
		            'categoryName' => 'Website design and Development',
		            'categoryIcon' => '<i class="fa fa-laptop fa-stack-1x fa-inverse"></i>',
		            'publication_status' => 1,
		        ),array(
		            'categoryName' => 'Hardware Servicing',
		            'categoryIcon' => '<i class="fa fa-cog fa-stack-1x fa-inverse"></i>',
		            'publication_status' => 1,
		        ),array(
		            'categoryName' => 'Networking Service',
		            'categoryIcon' => '<i class="fa fa-desktop fa-stack-1x fa-inverse"></i>',
		            'publication_status' => 1,
		        ),array(
		            'categoryName' => 'Sales and Services',
		            'categoryIcon' => '<i class="fa fa-bandcamp fa-stack-1x fa-inverse"></i>',
		            'publication_status' => 1,
		        )
		    ]);
		}else{
			echo "Table is not empty, therefore NOT";
		}


    }
}
