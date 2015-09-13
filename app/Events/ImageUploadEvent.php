<?php

namespace SchoolSoft\Events;

use SchoolSoft\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use SchoolSoft\School\User;

class ImageUploadEvent extends Event
{
    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $file;
    public $model;
    public function __construct( $model, $file)
    {
        $this->file = $file;
        $this->model = $model;


    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
