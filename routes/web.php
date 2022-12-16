<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController, UserController, RoleController, ProjectController, KlienController, TimController, AnggotaController, TaskController};

Route::get('/', function () {
    return view('welcome');
});

Route::group([
	'middleware' => ['auth','role:Admin|pm'],
	'prefix' => 'admin',
	'as' => 'admin.'
], function(){
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	
	// Settings menu
	Route::view('/settings', 'admin.settings')->name('settings');
	Route::post('/settings', [DashboardController::class, 'settings_store'])->name('settings');

	// Member menu
	Route::get('/member', [UserController::class, 'index'])->name('member');
	Route::get('/member/create', [UserController::class, 'create'])->name('member.create');
	Route::post('/member/create', [UserController::class, 'store'])->name('member.create');
	Route::get('/member/{id}/edit', [UserController::class, 'edit'])->name('member.edit');
	Route::post('/member/{id}/update', [UserController::class, 'update'])->name('member.update');
	Route::post('/member/{id}/delete', [UserController::class, 'destroy'])->name('member.delete');

	// Roles menu
	Route::get('/roles', [RoleController::class, 'index'])->name('roles');
	Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
	Route::post('/roles/create', [RoleController::class, 'store'])->name('roles.create');
	Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
	Route::post('/roles/{id}/update', [RoleController::class, 'update'])->name('roles.update');
	Route::post('/roles/{id}/delete', [RoleController::class, 'destroy'])->name('roles.delete');

	// Route::resource('/post', 'ProjectController');

	// Route::get('/project', function () {
	// 	return 'hello world!';
	// });

	// for project
	Route::get('/project', [ProjectController::class, 'index'])->name('project');
	Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
	Route::post('/project/create', [ProjectController::class, 'store'])->name('project.create');
	Route::get('/project/{id_project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
	Route::get('/project/{id_project}/update', [ProjectController::class, 'update'])->name('project.update');
	Route::post('/project/{id}/delete', [ProjectController::class, 'destroy'])->name('project.delete');

	//for klien
	// Route::get('/klien', function() {
	// 	return 'hello klien';
	// });
	Route::get('/klien', [KlienController::class, 'index'])->name('klien');
	Route::get('/klien/create', [KlienController::class, 'create'])->name('klien.create');
	Route::post('/klien/create', [KlienController::class, 'store'])->name('klien.create');
	Route::get('/klien/{id_klien}/edit', [KlienController::class, 'edit'])->name('klien.edit');
	Route::put('/klien/{id_klien}/update', [KlienController::class, 'update'])->name('klien.update');
	Route::post('/klien/{id}/delete', [KlienController::class, 'destroy'])->name('klien.delete');

	Route::get('/tim', [TimController::class, 'index'])->name('tim');
	Route::get('/tim/create', [TimController::class, 'create'])->name('tim.create');
	Route::post('/tim/create', [TimController::class, 'store'])->name('tim.create');
	Route::get('/tim/{id_tim}/show', [TimController::class, 'show'])->name('tim.show');
	Route::get('/tim/{id_tim}/edit', [TimController::class, 'edit'])->name('tim.edit');
	Route::put('/tim/{id_tim}/update', [TimController::class, 'update'])->name('tim.update');
	Route::post('/tim/{id}/delete', [TimController::class, 'destroy'])->name('tim.delete');

	Route::get('/task', [TaskController::class, 'index'])->name('task');
	Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
	Route::post('/task/create', [TaskController::class, 'store'])->name('task.create');
	Route::get('/task/{id_task}/show', [TaskController::class, 'show'])->name('task.show');
	Route::get('/task/{id_task}/edit', [TaskController::class, 'edit'])->name('task.edit');
	Route::put('/task/{id_task}/update', [TaskController::class, 'update'])->name('task.update');
	Route::post('/task/{id}/delete', [TaskController::class, 'destroy'])->name('task.delete');

	// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('/anggota', [AnggotaController::class, 'index'])->name('anggota');
	Route::get('/anggota/create', [AnggotaController::class, 'create'])->name('anggota.create');
	Route::post('/anggota/create', [AnggotaController::class, 'store'])->name('anggota.create');
	Route::get('anggota/{id_anggota}/edit', [AnggotaController::class, 'edit'])->name('anggota.edit');
	Route::put('anggota/{id_anggota}/update', [AnggotaController::class, 'update'])->name('anggota.update');
	Route::post('anggota/{id}/delete', [AnggotaController::class, 'destroy'])->name('anggota.delete');

});

Route::group([
	'middleware' => ['auth','role:anggota'],
	'prefix' => 'anggota',
	'as' => 'anggota.'
], function(){
	Route::get('/task/dashboard', [DashboardController::class, 'index'])->name('dashboard');
	Route::get('/task/index', [TaskController::class, 'showTaskForAnggota'])->name('task.index');
	Route::get('/task/{id_task}/edit', [TaskController::class, 'createSubmitTask'])->name('task.create');
	Route::put('/task/{id_task}/update', [TaskController::class, 'storeSubmitTask'])->name('task.update');
	// Route::get('/task/{id_anggota}/edit', [AnggotaController::class, 'edit'])->name('edit');
	// Route::put('/task/{id_anggota}/update', [AnggotaController::class, 'update'])->name('update');
	// Route::post('/task/{id}/delete', [AnggotaController::class, 'destroy'])->name('delete');
});

Route::group([
	'middleware' => 'auth'
], function(){
	// Profile menu
	Route::view('/profile', 'admin/profile')->name('profile');
	Route::post('/profile', [DashboardController::class, 'profile_update'])->name('profile');
	Route::post('/profile/upload', [DashboardController::class, 'upload_avatar'])
		->name('profile.upload');
	Route::get('/logs', [DashboardController::class, 'activity_logs'])->name('logs');
	Route::post('/logs/delete', [DashboardController::class, 'delete_logs'])->name('logs.delete');
});


require __DIR__.'/auth.php';
