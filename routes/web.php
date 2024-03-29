<?php
Auth::routes(['register' => false]);

Route::get('/', function () { return redirect('/admin'); });
Route::get('/home', function () { return redirect('/admin'); });
Route::get('/testing', 'TestingController@index')->name('testing');
Route::get('/test', 'Admin\HomeController@test')->name('test');
Route::get('/dashboard', 'Admin\HomeController@index')->name('dashboard');
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {

    Route::get('/', 'ClientDashboardPagesController@clientDashboard')->name('home');
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');

    Route::resource('permissions', 'PermissionsController');

    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');

    Route::resource('roles', 'RolesController');

    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');

    Route::resource('users', 'UsersController');

    Route::post('users/media', 'UsersController@storeMedia')->name('users.storeMedia');

    Route::post('users/parse-csv-import', 'UsersController@parseCsvImport')->name('users.parseCsvImport');

    Route::post('users/process-csv-import', 'UsersController@processCsvImport')->name('users.processCsvImport');

    Route::delete('audit-logs/destroy', 'AuditLogsController@massDestroy')->name('audit-logs.massDestroy');

    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    Route::delete('project-types/destroy', 'ProjectTypeController@massDestroy')->name('project-types.massDestroy');

    Route::resource('project-types', 'ProjectTypeController');

    Route::post('project-types/parse-csv-import', 'ProjectTypeController@parseCsvImport')->name('project-types.parseCsvImport');

    Route::post('project-types/process-csv-import', 'ProjectTypeController@processCsvImport')->name('project-types.processCsvImport');

    Route::delete('project-sub-types/destroy', 'ProjectSubTypeController@massDestroy')->name('project-sub-types.massDestroy');

    Route::resource('project-sub-types', 'ProjectSubTypeController');

    Route::post('project-sub-types/parse-csv-import', 'ProjectSubTypeController@parseCsvImport')->name('project-sub-types.parseCsvImport');

    Route::post('project-sub-types/process-csv-import', 'ProjectSubTypeController@processCsvImport')->name('project-sub-types.processCsvImport');

    Route::delete('documents/destroy', 'DocumentsController@massDestroy')->name('documents.massDestroy');

    Route::resource('documents', 'DocumentsController');

    Route::post('documents/media', 'DocumentsController@storeMedia')->name('documents.storeMedia');

    Route::post('documents/parse-csv-import', 'DocumentsController@parseCsvImport')->name('documents.parseCsvImport');

    Route::post('documents/process-csv-import', 'DocumentsController@processCsvImport')->name('documents.processCsvImport');

    Route::delete('clients/destroy', 'ClientController@massDestroy')->name('clients.massDestroy');

    Route::resource('clients', 'ClientController');

    Route::post('clients/parse-csv-import', 'ClientController@parseCsvImport')->name('clients.parseCsvImport');

    Route::post('clients/process-csv-import', 'ClientController@processCsvImport')->name('clients.processCsvImport');

    Route::delete('projects/destroy', 'ProjectController@massDestroy')->name('projects.massDestroy');

    Route::resource('projects', 'ProjectController');
    Route::get('/my-projects', 'ProjectController@myProjects');

    Route::delete('project-comments/destroy', 'ProjectCommentsController@massDestroy')->name('project-comments.massDestroy');

    Route::resource('project-comments', 'ProjectCommentsController');

    Route::post('project-comments/parse-csv-import', 'ProjectCommentsController@parseCsvImport')->name('project-comments.parseCsvImport');

    Route::post('project-comments/process-csv-import', 'ProjectCommentsController@processCsvImport')->name('project-comments.processCsvImport');

    Route::delete('tast-categories/destroy', 'TastCategoryController@massDestroy')->name('tast-categories.massDestroy');

    Route::resource('tast-categories', 'TastCategoryController');

    Route::post('tast-categories/parse-csv-import', 'TastCategoryController@parseCsvImport')->name('tast-categories.parseCsvImport');

    Route::post('tast-categories/process-csv-import', 'TastCategoryController@processCsvImport')->name('tast-categories.processCsvImport');

    Route::delete('client-portals/destroy', 'ClientPortalController@massDestroy')->name('client-portals.massDestroy');

    Route::resource('client-portals', 'ClientPortalController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    Route::delete('tasks/destroy', 'TaskController@massDestroy')->name('tasks.massDestroy');

    Route::resource('tasks', 'TaskController');
    Route::get('my-tasks', 'TaskController@myTasks');

    Route::delete('task-statuses/destroy', 'TaskStatusController@massDestroy')->name('task-statuses.massDestroy');

    Route::resource('task-statuses', 'TaskStatusController');

    Route::post('task-statuses/parse-csv-import', 'TaskStatusController@parseCsvImport')->name('task-statuses.parseCsvImport');

    Route::post('task-statuses/process-csv-import', 'TaskStatusController@processCsvImport')->name('task-statuses.processCsvImport');

    Route::delete('task-comments/destroy', 'TaskCommentsController@massDestroy')->name('task-comments.massDestroy');

    Route::resource('task-comments', 'TaskCommentsController');

    Route::delete('task-comment-replies/destroy', 'TaskCommentReplyController@massDestroy')->name('task-comment-replies.massDestroy');

    Route::resource('task-comment-replies', 'TaskCommentReplyController');

    Route::delete('task-portals/destroy', 'TaskPortalController@massDestroy')->name('task-portals.massDestroy');

    Route::resource('task-portals', 'TaskPortalController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    Route::delete('task-documents/destroy', 'TaskDocumentController@massDestroy')->name('task-documents.massDestroy');

    Route::resource('task-documents', 'TaskDocumentController');

    Route::post('task-documents/media', 'TaskDocumentController@storeMedia')->name('task-documents.storeMedia');

    Route::delete('project-reports/destroy', 'ProjectReportController@massDestroy')->name('project-reports.massDestroy');

    Route::resource('project-reports', 'ProjectReportController');
    Route::get('my-reports', 'ProjectReportController@myReports');
    Route::post('project-reports/media', 'ProjectReportController@storeMedia')->name('project-reports.storeMedia');

    Route::get('system-calendar', 'SystemCalendarController@index')->name('systemCalendar');
    Route::get('view-calendar', 'SystemCalendarController@index')->name('view-calendar');


    // Extra Routes   getAllTaskComments

    Route::get('/client_dashboard', 'ClientDashboardPagesController@clientDashboard')->name('client_dashoard');

    Route::get('/view_single_client/{id}', 'ClientDashboardPagesController@viewSingleClient')->name('view_single_client');

    Route::get('/create_task', 'TaskPagesController@createTask')->name('create_task');

    Route::get('/create_project', 'ProjectPagesController@createProject')->name('create_project');

    Route::get('/upload_document', 'ProjectPagesController@uploadDocument')->name('upload_document');

    Route::get('/get_single_comment/{id}', 'TaskPagesController@getSingleComment')->name('get_single_comment');

    Route::get('/get_comment_by_task_id/{task_id}', 'TaskPagesController@getAllTaskComments')->name('get_comment_by_task_id');

    Route::get('/get_single_project', 'TaskPagesController@getProject/{client_id}')->name('get_single_project');

    Route::get('/get_all_project', 'TaskPagesController@getProjects')->name('get_all_projects');

    Route::get('/project_dashboard', 'TaskPagesController@projectDashboard')->name('project_dashboard');

    Route::get('/project_subtype', 'ProjectPagesController@projectSubtype')->name('project_subtype');
    Route::get('/preview/{id}', 'DocumentsController@preview')->name('preview');

    // Lettertypes
    Route::delete('letter-types/destroy', 'LetterTypeController@massDestroy')->name('letter-types.massDestroy');
    Route::resource('letter-types', 'LetterTypeController');

    // Payrollletters
    Route::delete('payroll-letters/destroy', 'PayrollLetterController@massDestroy')->name('payroll-letters.massDestroy');
    Route::resource('payroll-letters', 'PayrollLetterController');
    // Servicesfees
    Route::delete('services-fees/destroy', 'ServicesFeesController@massDestroy')->name('services-fees.massDestroy');
    Route::resource('services-fees', 'ServicesFeesController');
    Route::get('/create-services', 'ServicesFeesController@createService')->name('services-fees.createServices');



    Route::get('create_project', 'ProjectPagesController@createProject')->name('create_project');
    Route::get('project_report', 'ProjectPagesController@projectReport')->name('project_report');
    Route::get('create_client', 'ClientDashboardPagesController@createClient')->name('create_client');

    Route::get('task_category', 'TaskPagesController@createTaskCategory')->name('task_category');
    Route::get('project_comment', 'ProjectPagesController@projectComment')->name('project_comment');
    Route::get('view_project', 'ProjectPagesController@viewProject')->name('view_project');
    Route::get('/get_project_subtype/{project_id}', 'ProjectPagesController@projectTypeAPI')->name('get_project_subtype');
    Route::get('view_task', 'TaskPagesController@viewTask')->name('view_task');
    Route::get('task_comments/{id}', 'TaskPagesController@taskComments')->name('task_comments');
    Route::get('letter_template', 'TaskPagesController@letter_template')->name('letter_template');

    Route::get('/task-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/task-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...


});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/task-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    Route::post('/task-filemanager/upload', '\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');
    // list all lfm routes here...
});
