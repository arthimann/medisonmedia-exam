<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-row gap-4">
                <div class="basis-1/4">
                    @include('components.country.add')
                </div>
                <div class="basis-3/4">
                    @include('components.country.list')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
