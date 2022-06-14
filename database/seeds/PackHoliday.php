<?php

use App\Holiday;

use Illuminate\Database\Seeder;



class PackHoliday extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $packs = [
            'holidays' =>
            [
                'name' => 'maiorca',
                'description' => 'Volo + soggiorno da 7 a 10 notti',
                'price' => 451,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'creta',
                'description' => 'Volo + soggiorno da 7 a 10 notti',
                'price' => 533,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'ibiza',
                'description' => 'Volo + soggiorno da 7 a 10 notti',
                'price' => 1005,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'santorini',
                'description' => 'Volo + soggiorno da 7 a 10 notti',
                'price' => 645,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'minorca',
                'description' => 'Volo + soggiorno da 3 a 5 notti',
                'price' => 322,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'malta',
                'description' => 'Volo + soggiorno da 7 a 10 notti',
                'price' => 211,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'rodi',
                'description' => 'Volo + soggiorno da 7 a 10 notti',
                'price' => 800,
                'image' => 'https://picsum.photos/200/300',
            ],
            [
                'name' => 'tenerife',
                'description' => 'Volo + soggiorno da 7 a 10 notti',
                'price' => 745,
                'image' => 'https://picsum.photos/200/300',
            ]
        ];

        foreach($packs as $pack){
            $newPack = new Holiday();
            $newPack->name = $pack['name'];
            $newPack->description = $pack['description'];
            $newPack->price = $pack['price'];
            $newPack->image = $pack['image'];
            $newPack->save();
        }

    }
}
