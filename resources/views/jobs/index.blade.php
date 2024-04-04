<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>


    <div class="mt-6 flex items-center justify-start gap-x-6">
        <a href="/jobs/create"
           class="rounded-md bg-blue-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">
            Post a new Job
        </a>
    </div>

    <hr class="my-6 h-0.5 border-t-0 bg-gray-200"/>

    <ul role="list" class="divide-y divide-gray-100">
        @foreach ($jobs as $job)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <a href="/jobs/{{ $job['id'] }}">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-semibold leading-6 text-gray-900">{{ $job['title'] }}</p>
                            <p class="mt-1 truncate text-xs leading-5 text-gray-500">
                                <strong>{{ $job['salary'] }}</strong> per year.</p>
                        </div>
                    </a>
                </div>
                <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
                    <p class="text-sm leading-6 text-gray-900">{{ $job->employer->name }}</p>
                    <p class="mt-1 text-xs leading-5 text-gray-500">Posted
                        <time datetime="{{ $job['created_at'] }}">{{ $job['created_at'] }}</time>
                    </p>
                </div>
            </li>

            <hr class="my-6 h-0.5 border-t-0 bg-gray-200"/>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </ul>

</x-layout>
