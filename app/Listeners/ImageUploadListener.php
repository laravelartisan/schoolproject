<?php

namespace SchoolSoft\Listeners;

use SchoolSoft\Events\SomeEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Intervention\Image\Facades\Image;
use SchoolSoft\Events\ImageUploadEvent;
use SchoolSoft\School\Photo;

class ImageUploadListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public $filename;
    public function __construct()
    {

    }

    /**
     * Handle the event.
     *
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(ImageUploadEvent $event )
    {

        $this->filename = time().str_random(3).$event->file->getClientOriginalName();
        Image::make($event->file->getRealPath())->resize(200,200)->save('upload/'. $this->filename);
        $photo = new Photo();
        $photo->path= $this->filename;
        $event->user->all()->last()->photos()->save($photo);


    }
}
