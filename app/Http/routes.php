<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin', function(){



    return view('admin.dashboard');

});
Route::get('parent', function(){



    return view('admin.data');

});
Route::get('teacher', function(){



    return view('admin.data');

});
Route::get('user', function(){



    return view('admin.data');

});
Route::get('student', function(){



    return view('admin.student.index');

});
Route::get('student/add', function(){



    return view('admin.student.student-form');

});
Route::get('admin2', function(){



    return view('admin2.index');

});
