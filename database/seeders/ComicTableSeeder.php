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
            $new_comic->thumb = $comic['thumb'];
            $new_comic->price = $comic['price'];
            $new_comic->series = $comic['series'];
            $new_comic->type = $comic['type'];
            $new_comic->publisher = $comic['publisher'];
            $new_comic->release_date = $comic['release_date'];
            $new_comic->author = $comic['author'];
            $new_comic->pages = $comic['pages'];
            $new_comic->rating = $comic['rating'];
            $new_comic->total_votes = $comic['total_votes'];
            $new_comic->description = $comic['description'];
            $new_comic->save();
        }
    }
}
