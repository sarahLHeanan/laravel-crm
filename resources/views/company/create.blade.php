<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Add Company
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 dark:text-gray-100">
                    <form enctype="multipart/form-data" method="POST" action="/companies">
                        @csrf
                        @method('POST')

                        @include('partials.company-fields')
                    </form>
                </div>
            </div>
        </div>
    </div>   

</x-app-layout>