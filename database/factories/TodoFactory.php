<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Todo\Todo;
use Faker\Generator as Faker;

$factory->define(Todo::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'title' => 'တီဗီကြည့်မယ်',
        'completed' => false
    ];
});
