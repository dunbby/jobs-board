<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <ul>
        <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

        <p>
            This job pays <strong>{{ $job['salary'] }} per year.</strong>
        </p>

        <p class="mt-4">
            Job listing by: <strong>{{ $job->employer->name }}<strong>
        </p>
    </ul>
</x-layout>
