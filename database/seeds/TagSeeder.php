<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;
use Faker\Generator as Faker;
class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $tag_names=[
            'Chef',
            'Modella', 
            'Stilista',
            'Regista',
            'Attore',
            'Designer',
            'Calciatore',
            'Allenatore',
            'SocialManager',
            'Pasticiere'
        ];

        foreach($tag_names as $name){
            $tag= new Tag();
            $tag->label= $name;
            $tag->color=$faker->hexColor();
            $tag->save();
        };
    }
}