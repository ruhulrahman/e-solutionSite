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


        $this->call(
            AdminSeeder::class,
            CategorySeeder::class,
            UsersSeeder::class,);



    function arraySeed($array) {
        foreach($array as $elem){
            $this->call($elem);
        }
    }



    }
}
