<?php
use App\User;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

/* Rotas que tratam do usuário */
Route::get('/users', 'UserController@index');
Route::get('/users/create', 'UserController@create');
Route::post('/users', 'UserController@store');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::put('/users/{id}', 'UserController@update');
Route::delete('/users/{id}', 'UserController@destroy');
Route::put('/users/{id}/disable', 'UserController@disable');
Route::get('/api/users', function(){
    $users = User::all();

    return Response::json(['data' => $users]);
});
// Route::get('/teste', function(){
//     return view('teste');
// });

/* Rotas que tratam dos uploads de imagem */
Route::post('/users/upload', 'CropController@postUpload');
Route::post('/users/crop', 'CropController@postCrop');
Route::post('/users/{id}/upload', 'CropController@postUpload');
Route::post('/users/{id}/crop', 'CropController@postCrop');

/* Rotas que tratam de projetos */
Route::get('/projects', 'ProjectController@index');
Route::get('/projects/{id}/edit', 'ProjectController@edit');
Route::get('/projects/create', 'ProjectController@create');
Route::post('/projects/create', 'ProjectController@store');
Route::put('/projects/{id}', 'ProjectController@update');

Route::get('/projects/{id}/andamentos', function($id){
    $project = App\Project::findOrFail($id);

    return view('template.project.gerenciar_andamentos')->with(compact('project'));
});

Route::post('/projects/{id}/andamentos', function(Request $request, $id){
    $project = App\Project::findOrFail($id);

    $progress = new App\Progress;
    $progress['title'] = $request->title;
    $progress['date'] = $request->date;
    $progress['start'] = $request->start;
    $progress['finish'] = $request->finish;
    $progress['details'] = $request->details;
    $progress['project_id'] = $request->project_id;
    $progress['user_id'] = $request->user_id;

    $progress->save();

    return Response::json($progress);
});

Route::get('/projects/marks/{id}', 'MarkController@show');
Route::patch('/projects/{id}/marks/{value}', 'MarkController@update');

Route::get('/api/projects', 'ProjectController@listing');

/*Rotas que tratam de Login*/
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

/* Rotas que tratam o perfil do usuário */
Route::get('/profile','ProfileController@index');
Route::get('/profile/{id}','ProfileController@show');
Route::get('/profile/edit','ProfileController@edit');
