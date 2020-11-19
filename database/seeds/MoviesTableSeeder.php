<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Drama

        DB::table('movies')->insert([
            'genre_id'=> '1',
            'title'=>'Forest',
            'photo'=>'Drama1.jpg',
            'description'=> 'Kang San-Hyeok (Park Hae-Jin) is a member of the 119 special rescue team.
            He is handsome and smart, but he does not remember his childhood. ',
            'rating' => '4' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '1',
            'title'=>'While You Were Sleeping',
            'photo'=>'Drama2.jpg',
            'description'=> 'Hong-Joo (Bae Suzy) lives with her mother and helps her run a pork restaurant. Hong-Joo is 
             haunted by seeing the future deaths of others in her dreams.',
            'rating' => '3' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '1',
            'title'=>'Its Okay to Not Be Okay',
            'photo'=>'Drama3.jpg',
            'description'=> 'Moon Gang-tae (Kim Soo-hyun) lives with his autistic older brother Moon Sang-tae (Oh Jung-se).
             They frequently moves from town to town, ever since Sang-tae witnessed their mother murder.',
            'rating' => '3' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '1',
            'title'=>'Tale of the Nine Tailed',
            'photo'=>'Drama4.jpg',
            'description'=> 'Lee Yeon (Lee Dong-Wook) was once the mountain spirit of Baekdudaegan. He sacrificed his life as 
            a mountain god to resurrect the life of the woman he loved A Eum.',
            'rating' => '5' 
        ]);


        //Kids

        DB::table('movies')->insert([
            'genre_id'=> '2',
            'title'=>'Home',
            'photo'=>'Kids1.jpg',
            'description'=> 'An alien race known as the Boov find near-future Earth a suitable place to call "home". 
            Led by Captain Smek (Steve Martin), they commence their "friendly" invasion of the planet.',
            'rating' => '4' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '2',
            'title'=>'Epic',
            'photo'=>'Kids2.jpg',
            'description'=> 'Epic (stylized as epic) is a 2013 American 3D computer-animated action-adventure film based loosely on William Joyces 1996
             childrens book The Leaf Men and the Brave Good Bugs.',
            'rating' => '2' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '2',
            'title'=>'Zambezia',
            'photo'=>'Kids3.jpg',
            'description'=> 'Kai is a naive, but high-spirited young Peregrine falcon who lives with his father Tendai. 
            After a visit from Gogo and Tini, Kai travels to "Zambezia".',
            'rating' => '3' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '2',
            'title'=>'The Croods',
            'photo'=>'Kids4.jpg',
            'description'=> 'A cave family called the Croods survives a natural disaster,
             due to the overprotective nature of their stubborn patriarch Grug.',
            'rating' => '5' 
        ]);

        //TV Shows

        DB::table('movies')->insert([
            'genre_id'=> '3',
            'title'=>'Quick Sand',
            'photo'=>'TV1.jpg',
            'description'=> 'A school shooting takes place at Djursholm senior high school. 
            At the age of 18, Maja Norberg is arrested and suspected of murder.',
            'rating' => '4' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '3',
            'title'=>'Lucifer',
            'photo'=>'TV2.jpg',
            'description'=> 'The series focuses on Lucifer Morningstar (Tom Ellis), a beautiful and powerful angel who was cast out of Heaven for his betrayal.
             As the Devil, Lucifer tires of the millennia he spent being the Lord of Hell, punishing people.',
            'rating' => '3' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '3',
            'title'=>'One of Us',
            'photo'=>'TV3.jpg',
            'description'=> ' Ari Hershkowitz, Luzer Twersky, and Etty Ausch. Each struggles with being ostracized from their 
            former community and families, while revealing how they came to leave.',
            'rating' => '3' 
        ]);
        DB::table('movies')->insert([
            'genre_id'=> '3',
            'title'=>'The Witcher',
            'photo'=>'TV4.jpg',
            'description'=> 'Geralt of Rivia, Crown Princess Ciri, and the sorceress Yennefer of Vengerberg at different points of time, 
            exploring formative events that shaped their characters.',
            'rating' => '5' 
        ]);

    }
}
