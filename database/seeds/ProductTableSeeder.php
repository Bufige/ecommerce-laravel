<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $product = new \App\Product([
            'imagePath' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/Walther_P99_9x19mm.png/1200px-Walther_P99_9x19mm.png',
            'title' => 'Gun',
            'description' => 'handgun pistol',
            'price' => 250
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.imfdb.org/images/4/43/Bushmaster_ar15_carbine.jpg',
            'title' => 'M16 - Semi automatic rifle',
            'description' => 'Rifle',
            'price' => 750
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'https://www.outdoorlife.com/sites/outdoorlife.com/files/styles/1000_1x_/public/import/2015/AK-47_type_II_Part_DM-ST-89-01131-1.jpg?itok=eC5yQO71',
            'title' => 'AK47 - Semi automatic rifle',
            'description' => 'Rifle',
            'price' => 550
        ]);
        $product->save();


    }
}
