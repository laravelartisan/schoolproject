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
    public $user;
    public function __construct(User $user, $file)
    {
        $this->file = $file;
        $this->user = $user;


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
