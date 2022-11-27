<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class book extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'publisher_id'=>1,
                'title'=>'Game of Thrones',
                'author'=>'George R.R. Martin',
                'year'=> '1996',
                'synopsis'=>'In the aftermath of a colossal battle, the future of the Seven Kingdoms hangs in the balance—beset by newly emerging threats from every direction.',
                'image_books'=>'https://i.pinimg.com/564x/38/c0/a3/38c0a3e5bd58df3587d27702f5e719d6.jpg'

            ],
            [
            'publisher_id'=>1,
            'title'=>'Game of Thrones',
            'author'=>'George R.R. Martin',
            'year'=> '1998',
            'synopsis'=>'Plot summary. A Clash of Kings depicts the Seven Kingdoms of Westeros in civil war, while the Nights Watch mounts a reconnaissance to investigate the mysterious people known as wildlings.',
            'image_books'=>'https://i.pinimg.com/564x/ef/f8/75/eff87521405eeeedca0891eb6838f89c.jpg'
        ],
        [
            'publisher_id'=>1,
            'title'=>'Game of Thrones',
            'author'=>'George R.R. Martin',
            'year'=> '1996',
            'synopsis'=>'The novella Blood of the Dragon, comprising the Daenerys Targaryen chapters from the novel, won the 1997 Hugo Award for Best Novella. In January 2011, the novel became a New York Times Bestseller[4] and reached No. 1 on the list in July 2011.',
            'image_books'=>'https://i.pinimg.com/564x/f3/b8/7c/f3b87c5b91392c2fa12d81246df90c79.jpg'
        ],[
            'publisher_id'=>1,
            'title'=>'The Coven',
            'author'=>'Lizzie Fry',
            'year'=> '2021',
            'synopsis'=>'The season takes place in 2013 in New Orleans and follows a coven of witches descended from Salem as they fight for survival',
            'image_books'=>'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRfbDkgpmZTBVY-BTgjlNDbTQ4hvdpE3s8Dxoe9L7xuLceHxEH1'
        ],
            ]);
    }
}
