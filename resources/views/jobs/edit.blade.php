<x-layout>
    <x-slot:heading>
        Edit listing: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600 sm:max-w-md">
                                <input type="text" name="title" id="title"
                                       class="block flex-1 w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                       placeholder="Software Engineer"
                                       value="{{ $job->title }}"
                                >
                            </div>
                        </div>

                        @error('title')
                        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                        @enderror

                    </div>
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">Salary</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600 sm:max-w-md">
                                <input type="text" name="salary" id="salary"
                                       class="block flex-1 w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                       placeholder="$50,000"
                                       value="{{ $job->salary }}"
                                >
                            </div>
                        </div>

                        @error('salary')
                        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>


        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center justify-start">
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 mr-6 text-gray-900">Cancel</a>

                <div>
                    <x-button :type="button" type="submit">Update</x-button>
                </div>
            </div>
            <div class="flex items-center justify-end">
                <x-button :type="button" color="red" type="submit" form="delete-form">Delete
                </x-button>
            </div>
        </div>


    </form>

    <form action="/jobs/{{ $job->id }}" method="POST" id="delete-form" hidden>
        @csrf
        @method('DELETE')
    </form>

</x-layout>
