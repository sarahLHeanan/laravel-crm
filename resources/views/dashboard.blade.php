<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-2">You're logged in!</p>
                    <p>
                        <a href="/companies" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Companies</a>
                    </p>                    
                    <p>
                        <a href="/employees" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">View Employee</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
