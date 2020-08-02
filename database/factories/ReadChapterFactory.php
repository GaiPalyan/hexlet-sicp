<?php

use App\Chapter;
use App\ReadChapter;
use App\User;
use Illuminate\Database\Eloquent\Factory;

/** @var Factory $factory */
$factory->define(ReadChapter::class, function () {
    return [
        'chapter_id' => factory(Chapter::class)->create()->id,
        'user_id'    => factory(User::class)->create()->id,
    ];
});
