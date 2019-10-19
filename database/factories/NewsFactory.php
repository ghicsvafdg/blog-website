<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\News;
use Faker\Generator as Faker;

$factory->define(News::class, function (Faker $faker) {
    return [
        'title'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'short_intro'=>$faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'content'=>$faker->text,
        'author'=>$faker->name,
        'related_articles'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'tag'=>$faker->word,
        'comment'=>$faker->text,
        // 'related'=>$faker->sentence($nbWords = 6, $variableNbWords = true),
    ];
});
