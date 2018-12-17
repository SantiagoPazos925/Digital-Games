<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $games = [
            ['name'=>'Battlefield 1 Revolution','platform'=>'PS4','genre'=>'Accion','image'=>'public/juegos/Battlefield 1 revolution.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Dakar 18','platform'=>'PS4','genre'=>'Carrera','image'=>'public/juegos/dakar.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Metro Exodus','platform'=>'XBox One','genre'=>'Accion','image'=>'public/juegos/MetroExodus.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Fallout 76','platform'=>'XBox One','genre'=>'Accion','image'=>'public/juegos/fallout76.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Far Cry 5','platform'=>'PS4','genre'=>'Accion','image'=>'public/juegos/FarCry5.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Injustice 2','platform'=>'PS4','genre'=>'Lucha','image'=>'public/juegos/Injustice2.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Marvel vs Capcom Infinite','platform'=>'PS4','genre'=>'Lucha','image'=>'public/juegos/marvelvscapcom.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Shinobi Striker','platform'=>'XBox One','genre'=>'Lucha','image'=>'public/juegos/naruto.jpeg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Pro Evolution Soccer 19','platform'=>'PS4','genre'=>'Deportes','image'=>'public/juegos/pes19.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Red Dead Redemption','platform'=>'PS4','genre'=>'Accion','image'=>'public/juegos/redDeadRedemptionIcon.jpeg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Soulcalibur 6','platform'=>'PS4','genre'=>'Accion','image'=>'public/juegos/Soulcalibur6.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Spider Man','platform'=>'PS4','genre'=>'Aventura','image'=>'public/juegos/spiderManIcon.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Battlefield 5','platform'=>'PS4','genre'=>'Accion','image'=>'public/juegos/Battlefield 5.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Mortal Kombat XL','platform'=>'PS4','genre'=>'Lucha','image'=>'public/juegos/MortalKombatXL.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Shadow Of The Tomb Raider','platform'=>'PS4','genre'=>'Aventura','image'=>'public/juegos/Shadow Of The Tomb Raider.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Sniper Elite 3','platform'=>'PS4','genre'=>'Accion','image'=>'public/juegos/SniperElite 3.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Bioshock The Collection','platform'=>'PS4','genre'=>'Accion','image'=>'public/juegos/Bioshock The Collection.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Assasins Creed Odyssey','platform'=>'PS4','genre'=>'Aventura','image'=>'public/juegos/Assasins Creed Odyssey.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
            ['name'=>'Dragon Age Inquisition','platform'=>'PS4','genre'=>'Aventura','image'=>'public/juegos/DragonAgeInquisition.jpg','release_date'=>'2018-02-19','price'=>'3000','stock'=>'22'],
        ];


        foreach ($games as $game) {
            DB::table('games')->insert([
                'name' => $game['name'],
                'platform'=> $game['platform'],
                'genre'=> $game['genre'],
                'image'=> $game['image'],
                'release_date'=> $game['release_date'],
                'price'=> $game['price'],
                'stock'=> $game['stock'],
    
            ]);
        }
       
        
    }
}
