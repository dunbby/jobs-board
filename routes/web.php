<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->Paginate(5);

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/job/{id}', function ($id) {
    return view('job', [
        'job' => Job::find($id)
    ]);
});
