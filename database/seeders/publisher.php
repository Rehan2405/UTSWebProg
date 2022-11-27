<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class publisher extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publisher')->insert([
            [ 
                'publisher_name'=>'Noir Books',
                'address'=>'Address - Palmerah, Jakarta - Indonesia',
                'phone'=>'08281939283',
                'email'=>'Noir.books@publish.com',
                'image_publisher'=>'https://i.pinimg.com/564x/3b/1b/1d/3b1b1d7354d0c3626597458604668cd1.jpg'
            ]
            ]);
    }
}
