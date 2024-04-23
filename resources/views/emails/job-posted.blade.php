<h2>{{ $job->title }}</h2>

<br>

<p>Hello there,</p>
<p>your job listing was successfully posted.</p>

<hr>

<p>
    <a href="{{ url('/jobs/' . $job->id) }}">Preview your Job Listing.</a>
</p>
