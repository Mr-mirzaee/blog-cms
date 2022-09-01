<?php

namespace Database\Factories;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->realText(50);
        $body = $this->faker->realText(300);
        $bodyPieces = explode(' ', $body);
        return [
            'user_id' => 1,
            'title' => $title,
            'slug' => str_replace(' ', '-', $title),
            'description' => implode(" ", array_splice($bodyPieces, 0, 10)),
            'body' => $body,
            'images' => 'images/posts/2021/' . $this->faker->image(storage_path('app/public/images/posts/' . Carbon::now()->year), 640, 480, null, false)
        ];
    }
}
