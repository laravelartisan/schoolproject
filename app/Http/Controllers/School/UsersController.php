<?php

namespace SchoolSoft\Http\Controllers\School;

use Illuminate\Http\Request;

use SchoolSoft\Http\Requests;
use SchoolSoft\Http\Controllers\Controller;
use SchoolSoft\School\User;

class UsersController extends Controller
{
    protected $user;

    function __construct(User $user){

        $this->user = $user;
    }

    function store(Request $request){



        $this->user->create($request->all());
        return redirect()->back();
    }
}
