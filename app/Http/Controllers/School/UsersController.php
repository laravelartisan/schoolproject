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
use SchoolSoft\School\Type;
class UsersController extends Controller
{
    public $model;
    public $type;


    function __construct(User $user, Type $type){

        $this->model = $user;
        $this->type  = $type;
    }

    function index($typeId){


        $usersWithPhotos = array();
        $type = $this->type->find($typeId);
        $users = $type->users;
        foreach($users as $user){

            if( count($user->photos)>0)

                $usersWithPhotos[$user->photos->first()->path] = $user;
        }

//        dd($this->type->find($typeId)->type_name);

        return view('admin.'.$type->type_name.'.index', compact('usersWithPhotos'));




    }
    function getStudentByClass($className){

        $studentsWithPhotos = [];
        $studentsByClass = $this->model->whereClass($className)->get();
        foreach(  $studentsByClass as $studentByClass){
            if( count($studentByClass->photos)>0)

            $studentsWithPhotos[$studentByClass->photos->first()->path] = $studentByClass;

        }

        return view('admin.datatable',compact('studentsWithPhotos'));


    }

    function view($userId,$typeId){

        $type = $this->type->find($typeId);
        $userProfile = $this->model->whereId($userId)
                                    ->whereTypeId($typeId)
                                    ->first();
//dd($userProfile);
        if(!is_null($userProfile))



        return view('admin.'.$type->type_name.'.view',compact('userProfile'));
        abort(404);


    }
    function edit($userId,$typeId){

        $type = $this->type->find($typeId);
        $userProfile = $this->model->whereId($userId)
            ->whereTypeId($typeId)
            ->first();

        if(!is_null($userProfile))
        return view('admin.'.$type->type_name.'.edit',compact('userProfile'));
        abort(404);

    }



    function update($userId,$typeId, Request $request){

        $userProfile = $this->model->whereId($userId)
                                    ->whereTypeId($typeId)
                                    ->first();
        if(!is_null($userProfile))
        $userProfile->fill($request->all())->save();

        //image not updated

        return redirect()->route('userlist',[$typeId]);


    }

    function delete ($userId, $typeId)
    {

        $userToDelete = $this->model->whereId($userId)->first();

        if ($userToDelete->delete())
            return redirect()->route('userlist',[$typeId]);



    }
    function store(UserValidationRequest $request ){


       /* dd( $this->model->all() );*/
        /*dd($request->get('user_type'));*/

        $this->model->create($request->all());

        \Event::fire(new ImageUploadEvent( $this->model,$request->file('photo')));



        return redirect()->route('userlist',[$this->model->all()->last()->type['id']]);
    }
}
