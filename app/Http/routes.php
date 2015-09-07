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
Route::get('student', function(){



    return view('admin.student.index');

});
Route::get('student/add', function(){



    return view('admin.student.add');

});
Route::get('parent', function(){



    return view('admin.parents.index');

});
Route::get('parent/add', function(){



    return view('admin.parents.add');

});
Route::get('teacher', function(){



    return view('admin.teacher.index');

});

Route::get('teacher/add', function(){



    return view('admin.teacher.add');

});
Route::get('user', function(){



    return view('admin.user.index');

});

Route::get('user/add', function(){



    return view('admin.user.add');

});

Route::get('class', function(){



    return view('admin.user.index');

});
Route::get('section', function(){



    return view('admin.section.index');

});
Route::get('subject', function(){



    return view('admin.subject.index');

});
Route::get('grade', function(){



    return view('admin.grade.index');

});
Route::get('exam', function(){



    return view('admin.exam.exam.index');

});
Route::get('exam/examschedule', function(){



    return view('admin.exam.examschedule.index');

});
Route::get('mark', function(){



    return view('admin.mark.index');

});
Route::get('routine', function(){



    return view('admin.routine.index');

});

Route::get('attendance/student', function(){



    return view('admin.attendance.student.index');

});

Route::get('attendance/teacher', function(){



    return view('admin.attendance.teacher.index');

});
Route::get('attendance/exam', function(){



    return view('admin.attendance.exam.index');

});

Route::get('library/member', function(){



    return view('admin.library.memeber.index');

});

Route::get('library/book', function(){



    return view('admin.library.book.index');

});

Route::get('library/issue', function(){



    return view('admin.library.issue.index');

});
Route::get('library/fine', function(){



    return view('admin.library.fine.index');

});
Route::get('transport/transport', function(){



    return view('admin.transport.transport.index');

});
Route::get('transport/member', function(){



    return view('admin.transport.member.index');

});

Route::get('hostel/hostel', function(){



    return view('admin.hostel.hostel.index');

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
Route::get('account/balance', function(){



    return view('admin.account.balance.index');

});
Route::get('account/expense', function(){



    return view('admin.account.expense.index');

});
Route::get('account/invoice', function(){



    return view('admin.account.invoice.index');

});

Route::get('promotion', function(){



    return view('admin.promotion.index');

});

Route::get('mailsms', function(){



    return view('admin.mailsms.mailsms.index');

});

Route::get('mailsms/template', function(){



    return view('admin.mailsms.template.index');

});

Route::get('mailsms/settings', function(){



    return view('admin.mailsms.settings.index');

});

Route::get('notice', function(){



    return view('admin.notice.index');

});

Route::get('admin2', function(){



    return view('admin2.index');

});
