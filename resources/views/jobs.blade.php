<x-layout>
    <x-slot:heading>
        Job listings
    </x-slot:heading>

    <ul role="list" class="divide-y divide-gray-100">
        @foreach ($jobs as $job)
            <li class="flex justify-between gap-x-6 py-5">
                <div class="flex min-w-0 gap-x-4">
                    <a href="/job/{{ $job['id'] }}">
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
