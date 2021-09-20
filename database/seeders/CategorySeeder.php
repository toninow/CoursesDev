<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Brand;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
        [
            'name'    => 'Celulares y tablets',
            'slug'    => Str::slug('Celulares y tablets'),
            'icon'    => '<i class="fas fa-mobile-alt"></i>'
        ],

        [
            'name'    => 'tv, audio y video',
            'slug'    => Str::slug('tv, audio y video'),
            'icon'    => '<i class="fas fa-tv"></i>'
        ],

        [
            'name'    => 'consola y videojuegos',
            'slug'    => Str::slug('consola y videojuegos'),
            'icon'    => '<i class="fas fa-gamepad"></i>'
        ],

        [
            'name'    => 'computacion',
            'slug'    => Str::slug('Celulares y tablets'),
            'icon'    => '<i class="fas fa-laptop"></i>'
        ],

        [
            'name'    => 'moda',
            'slug'    => Str::slug('Celulares y tablets'),
            'icon'    => '<i class="fab fa-modx"></i>'
        ]
        ];

        //Crea un registro por cada vez que se ejecute el metodo factory dentro del metodo create
        foreach ($categories as $category){

            //cada categoria que tengamos va a generar 4 marcas distintas
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->categories()->attach($category->id);
            }
        }
    }
}
