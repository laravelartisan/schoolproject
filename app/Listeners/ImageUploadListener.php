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
    public $photo;

    public function __construct(Photo $photo)
    {
        $this->photo = $photo;

    }

    /**
     * Handle the event.
     *
     * @param  SomeEvent  $event
     * @return void
     */
    public function handle(ImageUploadEvent $event )
    {

//        dd($event->model->all());
        $this->filename = time().str_random(3).$event->file->getClientOriginalName();
        Image::make($event->file->getRealPath())->resize(200,200)->save('upload/'. $this->filename);
       /* $photo = new Photo();*/
        $this->photo->path= $this->filename;
        $this->photo->user_id = $event->model->all()->last()->id;
        $event->model->all()->last()->photos()->save( $this->photo);


    }
}
