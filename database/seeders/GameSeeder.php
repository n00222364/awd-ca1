<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;
Use Carbon\Carbon;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Game::insert([
        [
        'game_name' => 'Subnautica',
        'description' => 'An underwater adventure game set on an alien ocean planet.',
        'release_date'=> '2016',
        'image_url'=> 'https://image.api.playstation.com/vulcan/img/rnd/202009/3006/C76j3lYg8BNBWJRSYtI2ONbo.png',
        'platform' => 'Multi',
        'genre' => 'Survival'
        ],

        [
            'game_name' => 'Minecraft',
            'description' => 'Minecraft is a 2011 sandbox game developed and published by Swedish video game developer Mojang Studios.',
            'release_date'=> '2009',
            'image_url'=> 'https://graphicsprings.com/wp-content/uploads/2023/07/image-62.png',
            'platform' => 'Multi',
            'genre' => 'Survival'
        ],

        [
            'game_name' => 'Grand Theft Auto V',
            'description' => 'Grand Theft Auto V is a 2013 action-adventure game developed by Rockstar North.',
            'release_date'=> '2013',
            'image_url'=> 'https://5.imimg.com/data5/ECOM/Default/2022/5/WT/FD/MN/70256004/jdvqcpltymxxra1qqjm6tbdx-500x500.jpg',
            'platform' => 'Multi',
            'genre' => 'Action/Adventure'
        ],

        [
            'game_name' => 'Borderlands 2',
            'description' => 'Borderlands 2 is a 2012 action role-playing first-person shooter video game developed by Gearbox Software.',
            'release_date'=> '2012',
            'image_url'=> 'https://m.media-amazon.com/images/I/9153jQB0BFL.jpg',
            'platform' => 'Multi',
            'genre' => 'First-person shooter'
        ],

        [
            'game_name' => 'Stardew Valley',
            'description' => 'Stardew Valley is a 2016 farm life simulation role-playing video game.',
            'release_date'=> '2016',
            'image_url'=> 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTpjRWgnAdw_f6AEMNbxyq3gGv5-CMBszVi92OgQghWUOxPczHdkNd1fDBhtj45rWTDZ-VoeQ',
            'platform' => 'Multi',
            'genre' => 'Indie game'
        ],

        [
            'game_name' => 'The Walking Dead',
            'description' => 'The Walking Dead is an episodic graphic adventure game series developed and published by Telltale Games.',
            'release_date'=> '2012',
            'image_url'=> 'https://upload.wikimedia.org/wikipedia/en/3/31/The_Walking_Dead%2C_Season_One_cover.jpeg',
            'platform' => 'Multi',
            'genre' => 'Interactive film'
        ],

        [
            'game_name' => 'Half-Life 2',
            'description' => 'Half-Life 2 is a 2004 first-person shooter game developed and published by Valve Corporation.',
            'release_date'=> '2004',
            'image_url'=> 'https://s3.amazonaws.com/gameopedia_covers/covers/247586/86f4344909f8394e60ee557969fd8d76.png',
            'platform' => 'PC',
            'genre' => 'First-person shooter'
        ],

        [
            'game_name' => 'Halo 2',
            'description' => 'Halo 2 is a 2004 first-person shooter game developed by Bungie.',
            'release_date'=> '2004',
            'image_url'=> 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTGzPzgfdEEt6Ya0Vnqb53CQCZcl5mNDITg_kWC8GMF-8oTU-3wjXD21liy_qKKeQVj1sny',
            'platform' => 'Xbox',
            'genre' => 'First-person shooter'
        ],

        [
            'game_name' => 'The Last Of Us',
            'description' => 'The Last of Us is an action-adventure video game series and media franchise created by Naughty Dog.',
            'release_date'=> '2013',
            'image_url'=> 'https://upload.wikimedia.org/wikipedia/en/4/46/Video_Game_Cover_-_The_Last_of_Us.jpg',
            'platform' => 'Playstation',
            'genre' => 'Action/Adventure'
        ],

        [
            'game_name' => 'Pokémon Legends: Arceus',
            'description' => 'Pokémon Legends: Arceus is a 2022 action role-playing game developed by Game Freak.',
            'release_date'=> '2022',
            'image_url'=> 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcSFezszzBKYKAI3de95VugGFNl5rQ0f_NpwP1AfIEgEbymn3KgPgz7bpap6XmtbESqUjVy2-w',
            'platform' => 'Nintendo',
            'genre' => 'Adventure Game'
        ]
        ]
    );

    }
}
