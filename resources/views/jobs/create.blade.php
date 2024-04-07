<x-layout>
    <x-slot:heading>
        Create a listing
    </x-slot:heading>

    <form method="POST" action="/jobs">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a new listing</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">Share your free positions with the rest of the
                    world.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-blue-600 sm:max-w-md">
                                <input type="text" name="title" id="title"
                                       class="block flex-1 w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-600 sm:text-sm sm:leading-6"
                                       placeholder="Software Engineer">
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
                                       placeholder="$50,000">
                            </div>
                        </div>

                        @error('salary')
                        <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <p class="text-sm text-green-600 py-4" id="notice"></p>


        <div class="mt-6 flex items-center justify-start gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Back</a>

            <x-button :type="button" type="submit">Post</x-button>

        </div>


    </form>

</x-layout>
