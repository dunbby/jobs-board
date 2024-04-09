<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

//home view
Route::get('/', function () {
    return view('home');
});

//jobs - index
Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//create view
Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//store
Route::post('/jobs', function () {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);


    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

//show view
Route::get('/jobs/{job}', function (Job $job) {
    return view('jobs.show', [
        'job' => Job::find($job->id)
    ]);
});

//edit view
Route::get('/jobs/{job}/edit', function (Job $job) {
    return view('jobs.edit', [
        'job' => $job->find($job->id)
    ]);
});

//update
Route::patch('/jobs/{job}', function (Job $job) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job::findOrFail($job->id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/'.$job->id);
});

//destroy
Route::delete('/jobs/{job}', function (Job $job) {
    $job::findOrFail($job->id)->delete();

    return redirect('/jobs');
});
