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
Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [
        'job' => Job::find($id)
    ]);
});

//edit view
Route::get('/jobs/{id}/edit', function ($id) {
    return view('jobs.edit', [
        'job' => Job::find($id)
    ]);
});

//update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/'.$job->id);
});

//destroy
Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});
