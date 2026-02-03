<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
     return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'jobs' => 'teacher',
                'salary' => '$15.000'
            ],
            [
                'id' => '1',
                'jobs' => 'yeye',
                'salary' => '$55.000'
            ],
            [
                'id' => '1',
                'jobs' => 'opb',
                'salary' => '$25.000'
            ]
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
                [
                    'id' => '1',
                    'jobs' => 'teacher',
                    'salary' => '$15.000'
                ],
                [
                    'id' => '2',
                    'jobs' => 'yeye',
                    'salary' => '$55.000'
                ],
                [
                    'id' => '3',
                    'jobs' => 'opb',
                    'salary' => '$25.000'
                ]
        ];
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
        return view('job', ['job' => $job]);
});

Route::get('/contact', function () {
    return view('contact');
});