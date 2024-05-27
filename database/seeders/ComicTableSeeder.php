<?php

namespace Database\Seeders;

use App\Models\Comic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = json_decode(file_get_contents(__DIR__ . "\mydb.json"), true)['comics'];

        foreach ($data as $comic) {
            $new_comic = new Comic();
            $new_comic->series = $comic['series'];
            $new_comic->type = $comic['type'];
            $new_comic->price = $comic['price'];
            $new_comic->thumb = $comic['thumb'];
            $new_comic->save();
        }
    }
}
