<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class albumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("album1")->insert([
            "name"=>"alb",
            "description"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optio.",
            "created_at"=> now()
        ]);
        DB::table("album2")->insert([
            "name"=>"alb",
            "description"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optio.",
            "created_at"=> now()
        ]);
        DB::table("album3")->insert([
            "name"=>"alb",
            "description"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optio.",
            "created_at"=> now()
        ]);
        DB::table("album4")->insert([
            "name"=>"alb",
            "description"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optio.",
            "created_at"=> now()
        ]);
        DB::table("album5")->insert([
            "name"=>"alb",
            "description"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
            temporibus reiciendis iure aliquid totam optio.",
            "created_at"=> now()
        ]);
    }
}
