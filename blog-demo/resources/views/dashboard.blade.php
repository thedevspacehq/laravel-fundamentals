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
                    Categories
                </div>
                <a href="{{ route('categories.index') }}"> <x-primary-button>{{ __('View') }}</x-primary-button></a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 px-4 h-20 flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    Tags
                </div>
                <a href="{{ route('tags.index') }}"> <x-primary-button>{{ __('View') }}</x-primary-button></a>
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-4 px-4 h-20 flex justify-between items-center">
                <div class="text-gray-900 dark:text-gray-100">
                    Posts
                </div>
                <a href="{{ route('posts.index') }}"> <x-primary-button>{{ __('View') }}</x-primary-button></a>
            </div>
        </div>
    </div>
</x-app-layout>