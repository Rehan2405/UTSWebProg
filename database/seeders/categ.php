<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class categ extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                'categories_name' => 'Fiction'
            ],
            [
                'categories_name' => 'Horror'
            ]
            ]
        );
    }
}
