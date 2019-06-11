<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use App\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {

    $title = $faker->sentence(rand(5,10));
    $slug = str_slug($title, '-');

    return [

        'title' => $title,
        'slug' => $slug,
        'body' => $faker->paragraphs(rand(3,7), true),
        'views' => rand(0,10),
        'answers_count' => rand(0,10),
        'votes' => rand(-3,10)

    ];
});
