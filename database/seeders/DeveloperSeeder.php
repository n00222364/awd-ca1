<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Developer;


class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        


        Developer::insert([
            ['name' => 'Mojang', 'website' => 'https://www.minecraft.net/en-us', 'about' => 'Mojang Studios is a Swedish video game developer based in Stockholm. The studio is best known for developing the sandbox and survival game Minecraft.', 'image_url' => 'https://i0.wp.com/xboxera.com/wp-content/uploads/2020/05/Mojang-Studios-Logo.jpg?fit=1000%2C600&ssl=1'],
            ['name' => 'Unknown Worlds', 'website' => 'https://unknownworlds.com/en', 'about' => 'Unknown Worlds (UW) is a globally distributed developer of beloved games across a wide variety of genres and platforms.', 'image_url' => 'https://d17c72h1ypygg7.cloudfront.net/UWE_Logo_stacked_1440p_f776fe1b75.jpg' ],
            ['name' => 'Rockstar Games', 'website' => 'https://www.rockstargames.com/', 'about' => 'Rockstar Games is a video game company that has created well-known games such as the Grand Theft Auto series.', 'image_url' => 'https://thelodgge.com/wp-content/uploads/2022/11/rockstar-games-gta-promise.jpg' ],
            ['name' => 'Gearbox Software', 'website' => 'https://www.gearboxsoftware.com/', 'about' => 'Gearbox Software is an American video game development company based in Frisco, Texas.', 'image_url' => 'https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/98529f60-a744-4c8f-8ea8-40b283d374b8/dg0yrc2-10a3980e-0a60-4961-af4c-7379aeef03db.png/v1/fill/w_960,h_540,q_80,strp/gearbox_software__2005_2007__logo_remake_by_ezequieljairo_dg0yrc2-fullview.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwiaXNzIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsIm9iaiI6W1t7ImhlaWdodCI6Ijw9NTQwIiwicGF0aCI6IlwvZlwvOTg1MjlmNjAtYTc0NC00YzhmLThlYTgtNDBiMjgzZDM3NGI4XC9kZzB5cmMyLTEwYTM5ODBlLTBhNjAtNDk2MS1hZjRjLTczNzlhZWVmMDNkYi5wbmciLCJ3aWR0aCI6Ijw9OTYwIn1dXSwiYXVkIjpbInVybjpzZXJ2aWNlOmltYWdlLm9wZXJhdGlvbnMiXX0.npQC3Kp7biRxfPEV7206snQjRhQQ-N9Ak6Yqckx0TQs'],
            ['name' => 'ConcernedApe', 'website' => 'https://www.stardewvalley.net/author/concernedape/', 'about' => 'Eric Barone, known professionally as ConcernedApe, is an American video game designer and musician. He is best known for creating the 2016 video game Stardew Valley.', 'image_url' => 'https://static1.cbrimages.com/wordpress/wp-content/uploads/2024/05/concernedape-to-move-on-from-stardew-valley.jpg'],
            ['name' => 'Telltale Games', 'website' => 'https://telltale.com/', 'about' => 'Telltales legacy includes several award-winning and best-selling franchises including Batman: The Telltale Series, The Wolf Among Us, and more. Over 80 Game of the Year Awards.', 'image_url' => 'https://logowik.com/content/uploads/images/telltale-games5562.jpg'],
            ['name' => 'Valve Corporation', 'website' => 'https://www.valvesoftware.com/en/', 'about' => 'Valves debut title, Half-Life, was released in 1998. It won more than 50 game of the year awards, and PC Gamer even called it the Best PC Game Ever.', 'image_url' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Valve-logo.jpg/1200px-Valve-logo.jpg'],
            ['name' => 'Bungie', 'website' => 'https://www.bungie.net/7', 'about' => 'Founded in 1991 in a one-bedroom apartment in Chicago, IL, Bungie is the studio behind some of the biggest videogame hits in history, including Destiny, Halo, Myth, Marathon, and more.', 'image_url' => 'https://w0.peakpx.com/wallpaper/759/21/HD-wallpaper-bungie-games-widescreen-black-studio-video-halo-logo-white.jpg'],
            ['name' => 'Naughty Dog', 'website' => 'https://www.naughtydog.com/', 'about' => 'Established in 1984, Naughty Dog is one of the most successful and prolific game development studios in the world and a flagship first-party studio within PlayStation Studios.', 'image_url' => 'https://leonamills1204118.wordpress.com/wp-content/uploads/2015/03/naughtydog.jpg'],
            ['name' => 'Game Freak', 'website' => 'https://www.gamefreak.co.jp/town/30th/en/', 'about' => 'Game Freak Inc. is a Japanese video game developer, best known as the primary developer of the Pokémon series.', 'image_url' => 'https://logonoid.com/images/game-freak-logo.png'],
            ['name' => 'Mobius Digital', 'website' => 'https://www.mobiusdigitalgames.com/', 'about' => 'Mobius is a small, award-winning studio that makes games.', 'image_url' => 'https://lh3.googleusercontent.com/proxy/gQjRI9hgcb5unGV-y6B4tI-8L_arAglIhlgC3nwIVtbJtP_O4DSTiappbdkMPzVcZvWBDpGKAAnc1aBY_LpiFthp4lLdoNYlvHVULjM3BMUyDdRGH98uBst3']
        ]);
   
    }
}
