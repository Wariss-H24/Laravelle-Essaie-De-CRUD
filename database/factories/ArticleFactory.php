<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

use Alirezasedghi\LaravelImageFaker\ImageFaker;
use Alirezasedghi\LaravelImageFaker\Services\Picsum;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Article::class;
    public function definition(): array
    {
        $imageFaker = new ImageFaker(new Picsum());
        return [
            'title' => fake()->text(15), // on veut 15 mots
            'body' => fake()->text(200), // on veut 50 phrases
            'user_id' => function(){
                return User::inRandomOrder()->first()->id;
            },
            'image' =>$imageFaker->image(public_path('images')),
        ];
    }
}
