<?php

namespace LaravelEnso\IO;

use LaravelEnso\Enums\EnumServiceProvider as ServiceProvider;
use LaravelEnso\IO\app\Enums\IOStatuses;

class EnumServiceProvider extends ServiceProvider
{
    public $register = [
        'ioStatuses' => IOStatuses::class,
    ];
}