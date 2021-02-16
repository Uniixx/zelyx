<?php

use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* HR */
Route::get('/',                      'HrmsController@index')->name('hrms.index');
Route::get('hrms/users',                      'HrmsController@users')->name('hrms.users');
Route::get('hrms/departments',                'HrmsController@departments')->name('hrms.departments');
Route::get('hrms/employee',                   'HrmsController@employee')->name('hrms.employee');
Route::get('hrms/activities',                 'HrmsController@activities')->name('hrms.activities');
Route::get('hrms/holidays',                   'HrmsController@holidays')->name('hrms.holidays');
Route::get('hrms/events',                     'HrmsController@events')->name('hrms.events');
Route::get('hrms/payroll',                    'HrmsController@payroll')->name('hrms.payroll');
Route::get('hrms/accounts',                   'HrmsController@accounts')->name('hrms.accounts');
Route::get('hrms/report',                     'HrmsController@report')->name('hrms.report');

/* Project */
Route::get('project', function ()             { return redirect('project/index2'); });
Route::get('project/index2',                  'ProjectController@index2')->name('project.index2');
Route::get('project/list',                    'ProjectController@list')->name('project.list');
Route::get('project/taskboard',               'ProjectController@taskboard')->name('project.taskboard');
Route::get('project/ticket',                  'ProjectController@ticket')->name('project.ticket');
Route::get('project/ticketdetails',           'ProjectController@ticketdetails')->name('project.ticketdetails');
Route::get('project/clients',                 'ProjectController@clients')->name('project.clients');
Route::get('project/todo',                    'ProjectController@todo')->name('project.todo');

/* Job */
Route::get('job', function ()                 { return redirect('job/index3'); });
Route::get('job/index3',                      'JobController@index3')->name('job.index3');
Route::get('job/positions',                   'JobController@positions')->name('job.positions');
Route::get('job/applicants',                  'JobController@applicants')->name('job.applicants');
Route::get('job/resumes',                     'JobController@resumes')->name('job.resumes');
Route::get('job/jobsettings',                 'JobController@jobsettings')->name('job.jobsettings');

/* Authentication  */
Route::get('authentication', function ()        { return redirect('authentication/login'); });
Route::get('authentication/login',              'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register',           'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/forgotpassword',     'AuthenticationController@forgotpassword')->name('authentication.forgotpassword');
Route::get('authentication/error404',           'AuthenticationController@error404')->name('authentication.error404');
Route::get('authentication/error500',           'AuthenticationController@error500')->name('authentication.error500');

/* Extra pages  */
Route::get('pages', function ()                 { return redirect('pages/search'); });
Route::get('pages/search',                      'PagesController@search')->name('pages.search');
Route::get('pages/calendar',                    'PagesController@calendar')->name('pages.calendar');
Route::get('pages/contact',                     'PagesController@contact')->name('pages.contact');
Route::get('pages/filemanager',                 'PagesController@filemanager')->name('pages.filemanager');

/* Chat app  */
Route::get('chatapp', function ()                 { return redirect('chatapp/chat'); });
Route::get('chatapp/chat',                      'ChatappController@chat')->name('chatapp.chat');
Route::post('create-project', 'ProjectController@create');
Route::get('logout', function() { 
    Auth::logout(); 
    return redirect("/");
});

Auth::routes();
