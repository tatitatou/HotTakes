<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sauce;
use Illuminate\Support\Facades\DB;

class SauceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupérer les IDs des utilisateurs
        // $userIds = DB::table('users')->pluck('userId')->toArray();

        // Vérifier qu'il y a au moins un utilisateur
        // if (empty($userIds)) {
        //     echo "Aucun utilisateur trouvé. Veuillez ajouter des utilisateurs avant d'exécuter ce seeder.\n";
        //     return;
        // }

        // Définition des sauces
        $sauces = [
            [
                'name' => 'Ghost Pepper Sauce',
                'manufacturer' => 'Haunted Heat',
                'description' => 'Une sauce extrêmement piquante à base de piments ghost pepper, parfaite pour les amateurs de sensations fortes',
                'mainPepper' => 'Ghost Pepper (Bhut Jolokia)',
                'imageUrl' => 'https://www.sauce-piquante.fr/334-large_default/sauce-au-piment-jolokia-dave-s.jpg',
                'heat' => 9,
            ],
            [
                'name' => 'Sweet Chipotle',
                'manufacturer' => 'Smoky Heaven',
                'description' => 'Un mélange parfait de piments chipotle fumés et de miel local, offrant un équilibre entre douceur et chaleur',
                'mainPepper' => 'Chipotle (Jalapeño fumé)',
                'imageUrl' => 'https://storage.googleapis.com/images-prs-prd-c7e7986.prs.prd.v8.commerce.mi9cloud.com/product-images/zoom/00013409517826_1',
                'heat' => 5,
            ],
            [
                'name' => 'Habanero Mango',
                'manufacturer' => 'Tropical Spice',
                'description' => 'Une sauce exotique qui combine la douceur de la mangue avec le piquant de l\'habanero',
                'mainPepper' => 'Habanero Orange',
                'imageUrl' => 'https://m.media-amazon.com/images/I/61m1YZaPziL.jpg',
                'heat' => 7,
            ],
            [
                'name' => 'Citrus Scorpion',
                'manufacturer' => 'Exotic Heat',
                'description' => 'Une explosion d\'agrumes combinée au piquant intense du piment scorpion',
                'mainPepper' => 'Trinidad Scorpion',
                'imageUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKurEW0orvCDsuKlUR3KrPB4M0dG8HcvMEuA&s',
                'heat' => 8,
            ],
            [
                'name' => 'Jalapeño Verde',
                'manufacturer' => 'Verde Sabor',
                'description' => 'Une sauce verte fraîche à base de jalapeños frais et d\'herbes aromatiques',
                'mainPepper' => 'Jalapeño Vert',
                'imageUrl' => 'https://www.aliminter.com/media/catalog/product/cache/3/image/9df78eab33525d08d6e5fb8d27136e95/s/a/salsa_picante_jalape_o_verde_botella_pet_90_90_ml.jpg',
                'heat' => 4,
            ],
            [
                'name' => 'Carolina Reaper Fury',
                'manufacturer' => 'Inferno Bites',
                'description' => 'Une sauce terrifiante à base de Carolina Reaper, réservée aux plus courageux',
                'mainPepper' => 'Carolina Reaper',
                'imageUrl' => 'https://pimos3b.com/wp-content/uploads/2022/05/Capture-de%CC%81cran-2022-05-29-a%CC%80-15.50.55-300x300.png',
                'heat' => 10,
            ],
            [
                'name' => 'Garlic Serrano',
                'manufacturer' => 'Savory Fire',
                'description' => 'Une sauce relevée à l\'ail et aux piments serrano, idéale pour relever vos plats',
                'mainPepper' => 'Serrano',
                'imageUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQObe82mdwNv82rIHNbfZyXU4Y5S3-lxfk4ug&s',
                'heat' => 6,
            ],
            [
                'name' => 'Thai Dragon Fire',
                'manufacturer' => 'Asian Heat',
                'description' => 'Une sauce inspirée de la cuisine thaïlandaise, alliant piment thai et lait de coco',
                'mainPepper' => 'Piment Thai',
                'imageUrl' => 'https://m.media-amazon.com/images/I/51UFTSvjfLL.jpg',
                'heat' => 7,
            ],
            [
                'name' => 'Pineapple Habanero',
                'manufacturer' => 'Tropical Spice',
                'description' => 'Une explosion de saveurs tropicales avec de l\'ananas sucré et du piment habanero',
                'mainPepper' => 'Habanero Rouge',
                'imageUrl' => 'https://www.heatsupply.nl/wp-content/uploads/2024/08/heartbeat-pineapple-habanero-hot-sauce.jpg',
                'heat' => 6,
            ],
            [
                'name' => 'Smoked Ancho BBQ',
                'manufacturer' => 'BBQ Master',
                'description' => 'Une sauce BBQ douce et fumée avec des piments ancho et une touche de mélasse',
                'mainPepper' => 'Ancho (Poblano séché)',
                'imageUrl' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQepuityRUgpsnxBuOSl3rf04rmXH8G9Pr9Vg&s',
                'heat' => 3,
            ],
            [
                'name' => 'Wasabi Jalapeño',
                'manufacturer' => 'Fusion Heat',
                'description' => 'Un mélange explosif de wasabi et de jalapeño pour un piquant unique',
                'mainPepper' => 'Jalapeño',
                'imageUrl' => 'https://www.sauce-piquante.fr/585-large_default/sauce-ass-kickin-au-wasabi-habanero.jpg',
                'heat' => 5,
            ],
            [
                'name' => 'Blueberry Scorpion',
                'manufacturer' => 'Exotic Heat',
                'description' => 'Une sauce fruitée avec des myrtilles et du piment scorpion pour une touche sucrée et brûlante',
                'mainPepper' => 'Trinidad Scorpion',
                'imageUrl' => 'https://lucifershouseofheat.com/cdn/shop/products/pepper-north-wild-blueberry-scorpion.jpg?v=1664314777',
                'heat' => 8,
            ],
        ];
        

        // Insérer les sauces avec des userId aléatoires
        

        // Insertion dans la base de données
        DB::table('sauces')->insert($sauces);
    }
}
