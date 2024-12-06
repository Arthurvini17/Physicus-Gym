<?php

use App\Livewire\Counter;
use App\Livewire\Index;
use App\Livewire\Users\CreateUsers;
use App\Livewire\ViewAlunos;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class, 'index')->name('index.home');
Route::get('/counter', Counter::class);

Route::get('/create-users', CreateUsers::class)->name('create_users_index');
Route::get('/all-alunos', ViewAlunos::class)->name('view_alunos');
