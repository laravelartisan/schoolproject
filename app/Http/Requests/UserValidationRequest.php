<?php

namespace SchoolSoft\Http\Requests;

use SchoolSoft\Http\Requests\Request;


class UserValidationRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
//        dd($this->name);

        $user = [

            'name'=> 'required',
            'father_name'=> 'required',
            'mother_name'=> 'required',
            'birth_date'=> 'required|date_format:d/m/Y',
            'gender'=> 'required',
            'religion'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'phone'=> 'required',
            'address'=> 'required',
            'joining_date'=> 'required|date_format:d/m/Y',
            'photo'=> 'required|image',
            'type'=> 'required',
            'username'=> 'required|unique:users,username|alpha_dash',
            'password'=> 'required|confirmed|alpha_dash|digits_between:6,15',


        ];
        $teacher = [

            'name'=> 'required',

            'birth_date'=> 'required|date_format:d/m/Y',
            'gender'=> 'required',
            'religion'=> 'required',
            'email'=> 'required|email|unique:users,email',
            'phone'=> 'required',
            'address'=> 'required',
            'joining_date'=> 'required|date_format:d/m/Y',
            'photo'=> 'required|image',

            'username'=> 'required|unique:users,username|alpha_dash',
            'password'=> 'required|confirmed|alpha_dash|digits_between:6,15',


        ];
        $parent = [

            'name'          => 'required',
            'father_name'   => 'required',
            'mother_name'   => 'required',
            'profession'    => 'required',
            'gender'        => 'required',

            'email'         => 'required|email|unique:users,email',
            'phone'         => 'required',
            'address'       => 'required',

            'photo'         => 'required|image',

            'username'      => 'required|unique:users,username|alpha_dash',
            'password'      => 'required|confirmed|alpha_dash|digits_between:6,15',


        ];
        $student = [

            'name'=> 'required',
            'father_name'   => 'required',
            'mother_name'   => 'required',
            'guardian_name' => 'required',
            'birth_date'    => 'required|date_format:d/m/Y',
            'gender'        => 'required',
            'religion'      => 'required',
            'email'         => 'required|email|unique:users,email',
            'phone'         => 'required',
            'address'       => 'required',

            'photo'         => 'required|image',

            'username'      => 'required|unique:users,username|alpha_dash',
            'password'      => 'required|confirmed|alpha_dash|digits_between:6,15',


        ];
        $requestpath = explode('/',\Route::getCurrentRoute()->getPath())[0];

        return $$requestpath;








    }
}
