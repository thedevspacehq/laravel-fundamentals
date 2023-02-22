<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 px-4 h-20 flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    Users
                </div>
                <button class="bg-blue-500 dark:bg-blue-500 hover:bg-blue-700 dark:hover:bg-blue-700 rounded-md text-white w-20 h-fit p-2 focus:ring">View</button>
            </div>
        </div>
    </div>
</x-app-layout>
