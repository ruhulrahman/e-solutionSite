<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $cls = [
                AdminSeeder::class,
                CategorySeeder::class,
                UsersSeeder::class,
            ];
        foreach ($cls as $c) {
           $this->call($c);
        }
 
        // $this->call(AdminSeeder::class);
        // $this->call(UsersSeeder::class);
        // $this->call(CategorySeeder::class);
    }
}
