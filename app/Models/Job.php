<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job
{
    public static function all() : array {
        return [
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
    }

    public static function find(int $id) : array{
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);

        if(!$job){
            abort(404);
        }

        return $job;
    }
}
