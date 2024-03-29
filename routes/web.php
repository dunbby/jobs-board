<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::all();
    $employer = [];

    foreach ($jobs as $job):
        $employer[$job['id']] = $job->employer->name;
    endforeach;

    return view('jobs', [
        'jobs' => $jobs,
        'employer' => $employer
    ]);
});

Route::get('/job/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id),
        'employer' => Job::find($id)->employer
    ]);
});
