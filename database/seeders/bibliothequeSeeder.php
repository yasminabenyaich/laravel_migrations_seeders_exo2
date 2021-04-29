<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bibliothequeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table("bibliotheque")->insert([
           "name"=>"biblio",
           "description"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
           temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
           temporibus reiciendis iure aliquid totam optio.",
           "created_at"=> now()
       ]);
       DB::table("bibliotheque")->insert([
        "name"=>"biblio2",
        "description"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
        temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
        temporibus reiciendis iure aliquid totam optio.",
        "created_at"=> now()
    ]);
     DB::table("bibliotheque")->insert([
        "name"=>"biblio3",
        "description"=>"Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
        temporibus reiciendis iure aliquid totam optioLorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis quibusdam perspiciatis minima esse consectetur aut, id asperiores impedit. Quos et commodi dolorum dolores hic
        temporibus reiciendis iure aliquid totam optio.",
        "created_at"=> now()
    ]);
  
    }
}
