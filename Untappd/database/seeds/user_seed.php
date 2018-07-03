<?php

use Illuminate\Database\Seeder;

class user_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table("users")->insert([
            [
                "id"         		=> 4,
                "email"  			=> "gabriel@gmail.com",
                "password" 			=> bcrypt(123456),
            ],
            [
                "id"         		=> 2,
                "email"  			=> "Henrique@gmail.com",
                "password" 			=> bcrypt(123456),
            ],
             [
                "id"         		=> 3,
                "email"  			=> "Michael@gmail.com",
                "password" 			=> bcrypt(123456),
            ],
            [
                "id"         		=> 4,
                "email"  			=> "Andre@gmail.com",
                "password" 			=> bcrypt(123456),
            ],
        ]);
    
    }
}
