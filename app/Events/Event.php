<?php

namespace SchoolSoft\Events;

abstract class Event
{
    protected $listen = [
        'SchoolSoft\Events\ImageUploadEvent' => [
            'SchoolSoft\Listeners\ImageUploadListener',
        ],
    ];
}
