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
                    <x-form-field>
                        <x-form-label for="title">Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="title" id='title' placeholder="Software Engineer"/>
                        </div>

                        <x-form-error name="title"/>
                    </x-form-field>
                    <x-form-field>
                        <x-form-label for="salary">Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input name="salary" id='salary' placeholder="$50,000"/>
                        </div>

                        <x-form-error name="salary"/>
                    </x-form-field>
                </div>
            </div>
        </div>


        <div class="mt-6 flex items-center justify-start gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Back</a>

            <x-button :type="button" type="submit">Post</x-button>
        </div>


    </form>

</x-layout>
