<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['greeting' => 'Yo! Wassup!']);
});

Route::get('/about-json', function () {
    return ["name" => "amit", "address" => "kapan"];
});


Route::get('/about', function () {
    return view('about');
});


Route::get('/jobs', function () {
    return view('jobs', ['jobs' => [
        [
            'id' => '1',
            'title' => 'Web Developer',
            'salary' => '$50,000',
        ],
        [
            'id' => '2',
            'title' => 'Accountant',
            'salary' => '$10,000',
        ],
        [
            'id' => '3',
            'title' => 'Data Scientist',
            'salary' => '$80,000',
        ],
    ]]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => '1',
            'title' => 'Web Developer',
            'salary' => '$50,000',
        ],
        [
            'id' => '2',
            'title' => 'Accountant',
            'salary' => '$10,000',
        ],
        [
            'id' => '3',
            'title' => 'Data Scientist',
            'salary' => '$80,000',
        ],
    ];

    $job = Arr::first($jobs, fn ($job) => $job['id'] == $id);


    return view('job', ['job' => $job]);
});
