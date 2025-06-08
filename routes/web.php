<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\Dogs;
use App\Livewire\About;
use App\Livewire\Contact;

Route::get('/', Home::class)->name('home');

Route::get('/dogs', Dogs::class)->name('dogs');

Route::get('/about', About::class)->name('about');

Route::get('/contact', Contact::class)->name('contact');
