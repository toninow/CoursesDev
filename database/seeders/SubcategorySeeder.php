<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories = [

            // Celulares y tablets
            [
                'category_id' => 1,
                'name' => 'Celulares y smartphones',
                'slug' => Str::slug('Celulares y smartphones'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Accesorios para Celulares',
                'slug' => Str::slug('Accesorios para Celulares'),
            ],
            [
                'category_id' => 1,
                'name' => 'Smartwacthes',
                'slug' => Str::slug('Smartwacthes'),
            ],

            // tv, audio y video
            [
                'category_id' => 2,
                'name' => 'tv y audio',
                'slug' => Str::slug('tv y audio'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audios',
                'slug' => Str::slug('Audios'),
            ],
            [
                'category_id' => 2,
                'name' => 'Audio para autos',
                'slug' => Str::slug('Audio para autos'),
            ],

            // Consola y videojuegos
            [
                'category_id' => 3,
                'name' => 'Xbox',
                'slug' => Str::slug('Xbox'),
            ],
            [
                'category_id' => 3,
                'name' => 'Play Station',
                'slug' => Str::slug('Play Station'),
            ],
            [
                'category_id' => 3,
                'name' => 'Videojuegos PC',
                'slug' => Str::slug('Videojuegos PC'),
            ],
            [
                'category_id' => 3,
                'name' => 'Nintendo',
                'slug' => Str::slug('Nintendo'),
            ],

            // computacion
            [
                'category_id' => 4,
                'name' => 'Portatiles',
                'slug' => Str::slug('Portatiles'),
            ],
            [
                'category_id' => 4,
                'name' => 'Pc escritorio',
                'slug' => Str::slug('Pc escritorio'),
            ],
            [
                'category_id' => 4,
                'name' => 'Escritorio',
                'slug' => Str::slug('Escritorio'),
            ],
            [
                'category_id' => 4,
                'name' => 'almacenamiento',
                'slug' => Str::slug('almacenamiento'),
            ],
            [
                'category_id' => 4,
                'name' => 'Accesorios computadora',
                'slug' => Str::slug('Accesorios Computadora'),
            ],

             // Moda
            [
                'category_id' => 4,
                'name' => 'Mujeres',
                'slug' => Str::slug('Accesorios Computadora'),
            ],
            [
                'category_id' => 4,
                'name' => 'Hombres',
                'slug' => Str::slug('Hombres'),
            ],
            [
                'category_id' => 4,
                'name' => 'Lentes',
                'slug' => Str::slug('Lentes'),
            ],
            [
                'category_id' => 4,
                'name' => 'Relojes',
                'slug' => Str::slug('Relojes'),
            ],
        ];

        foreach ($subcategories as $subcategory) {

            Subcategory::factory(1)->create($subcategory);

        }

    }
}
