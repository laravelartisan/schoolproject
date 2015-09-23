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
/*Route::get('student', function(){



    return view('admin.student.index');

});*/
Route::get('student/add', function(){



    return view('admin.student.add');

});

/*Route::get('student/table', function(){



    return view('admin.datatable');

});*/
/*Route::get('parent', function(){



    return view('admin.parents.index');

});*/
Route::get('parent/add', function(){



    return view('admin.parents.add');

});
/*Route::get('teacher', function(){



    return view('admin.teacher.index');

});*/


Route::get('teacher/add', function(){



    return view('admin.teacher.add');

});
/*Route::get('user', function(){



    return view('admin.user.index');

});*/

Route::get('user/add', function(){



    return view('admin.user.add');

});

Route::get('class', function(){



    return view('admin.class.index');

});

Route::get('class/add', function(){



    return view('admin.class.add');

});
Route::get('section', function(){



    return view('admin.section.index');

});
Route::get('section/add', function(){



    return view('admin.section.add');

});
Route::get('subject', function(){



    return view('admin.subject.index');

});
Route::get('subject/add', function(){



    return view('admin.subject.add');

});
Route::get('grade', function(){



    return view('admin.grade.index');

});
Route::get('grade/add', function(){



    return view('admin.grade.add');

});
Route::get('exam', function(){



    return view('admin.exam.exam.index');

});
Route::get('exam/add', function(){



    return view('admin.exam.exam.add');

});

Route::get('exam/examschedule', function(){



    return view('admin.exam.examschedule.index');

});
Route::get('exam/examschedule/add', function(){



    return view('admin.exam.examschedule.add');

});
Route::get('mark', function(){



    return view('admin.mark.index');

});

Route::get('mark/add', function(){



    return view('admin.mark.add');

});
Route::get('routine', function(){



    return view('admin.routine.index');

});
Route::get('routine/add', function(){



    return view('admin.routine.add');

});

Route::get('attendance/student', function(){



    return view('admin.attendance.student.index');

});
Route::get('attendance/student/add', function(){



    return view('admin.attendance.student.add');

});

Route::get('attendance/teacher', function(){



    return view('admin.attendance.teacher.index');

});

Route::get('attendance/teacher/add', function(){



    return view('admin.attendance.teacher.add');

});
Route::get('attendance/exam', function(){



    return view('admin.attendance.exam.index');

});
Route::get('attendance/exam/add', function(){



    return view('admin.attendance.exam.add');

});

Route::get('library/member', function(){



    return view('admin.library.member.index');

});
Route::get('library/member/add', function(){



    return view('admin.library.member.add');

});

Route::get('library/book', function(){



    return view('admin.library.book.index');

});
Route::get('library/book/add', function(){



    return view('admin.library.book.add');

});

Route::get('library/issue', function(){



    return view('admin.library.issue.index');

});

Route::get('library/issue/add', function(){



    return view('admin.library.issue.add');

});
Route::get('library/fine', function(){



    return view('admin.library.fine.index');

});
Route::get('transport', function(){



    return view('admin.transport.transport.index');

});
Route::get('transport/add', function(){



    return view('admin.transport.transport.add');

});
Route::get('transport/member', function(){



    return view('admin.transport.member.index');

});

Route::get('hostel', function(){



    return view('admin.hostel.hostel.index');

});
Route::get('hostel/add', function(){



    return view('admin.hostel.hostel.add');

});

Route::get('hostel/category/add', function(){



    return view('admin.hostel.category.add');

});

Route::get('hostel/category', function(){



    return view('admin.hostel.category.index');

});

Route::get('hostel/member', function(){



    return view('admin.hostel.member.index');

});

Route::get('account/settings', function(){



    return view('admin.account.settings.index');

});
Route::get('account/feetype', function(){



    return view('admin.account.feetype.index');

});

Route::get('account/feetype/add', function(){



    return view('admin.account.feetype.add');

});
Route::get('account/balance', function(){



    return view('admin.account.balance.index');

});
Route::get('account/expense', function(){



    return view('admin.account.expense.index');

});
Route::get('account/expense/add', function(){



    return view('admin.account.expense.add');

});
Route::get('account/invoice', function(){



    return view('admin.account.invoice.index');

});
Route::get('account/invoice/add', function(){



    return view('admin.account.invoice.add');

});

Route::get('promotion', function(){



    return view('admin.promotion.index');

});
Route::get('media', function(){



    return view('admin.media.index');

});

Route::get('mailsms', function(){



    return view('admin.mailsms.mailsms.index');

});

Route::get('mailsms/add', function(){



    return view('admin.mailsms.mailsms.add');

});

Route::get('mailsms/template', function(){



    return view('admin.mailsms.template.index');

});

Route::get('mailsms/template/add', function(){



    return view('admin.mailsms.template.add');

});

Route::get('mailsms/settings', function(){



    return view('admin.mailsms.settings.index');

});

Route::get('message', function(){



    return view('admin.message.index');

});

Route::get('notice', function(){



    return view('admin.notice.index');

});
Route::get('notice/add', function(){



    return view('admin.notice.add');

});

Route::get('report', function(){



    return view('admin.report.index');

});

Route::get('settings', function(){



    return view('admin.settings.index');

});

Route::get('admin2', function(){



    return view('admin2.index');

});

Route::post('user/add','School\UsersController@store');
Route::post('teacher/add', 'School\UsersController@store');
Route::get('user/{typeId}', ['as'=>'userlist','uses'=>'School\UsersController@index']);
Route::get('user/att/{typeId}', ['as'=>'userlist','uses'=>'School\UsersController@attTeacherIndex']);
Route::get('user/view/{userId}/{typeId}', 'School\UsersController@view');
Route::get('user/edit/{userId}/{typeId}', 'School\UsersController@edit');
Route::put('user/edit/{userId}/{typeId}', 'School\UsersController@update');
Route::get('user/delete/{userId}/{typeId}', 'School\UsersController@delete');
Route::get('student/{class}','School\UsersController@getStudentByClass');
Route::get('student/att/{class}','School\UsersController@getAttStudentByClass');
Route::get('att/view/{userId}/{typeId}','School\UsersController@attView');
Route::post('parent/add', 'School\UsersController@store');
Route::post('student/add', 'School\UsersController@store');

Route::get('view',function(){
    return view('admin.dumyview');
});




