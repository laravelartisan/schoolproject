<?php

namespace SchoolSoft\Http\Controllers\School;

use Illuminate\Http\Request;
//use SchoolSoft\Events\Event;
use Illuminate\Support\Facades\Event;
use SchoolSoft\Http\Requests;
use SchoolSoft\Http\Controllers\Controller;
use SchoolSoft\School\User;
use SchoolSoft\Http\Requests\UserValidationRequest;
use SchoolSoft\Events\ImageUploadEvent;
use SchoolSoft\School\Photo;
use Intervention\Image\Facades\Image;
class UsersController extends Controller
{
    public $user;

    function __construct(User $user){

        $this->user = $user;
    }

    function store(UserValidationRequest $request ){





        $this->user->create($request->all());
        $this->filename = time().str_random(3).$request->file('photo')->getClientOriginalName();
        Image::make($request->file('photo')->getRealPath())->resize(200,200)->save('upload/'. $this->filename);
        $photo = new Photo();
        $photo->path= $this->filename;
        $this->user->all()->last()->photos()->save($photo);

      /*  \Event::fire(new ImageUploadEvent($this->user,$request->file('photo')));*/

        return redirect()->back();
    }
}
