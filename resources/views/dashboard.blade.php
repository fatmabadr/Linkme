<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!

                    <div class="banner__img text-center text-xxl-end">
                          <a href="{{route('add.button')}}" class="btn banner__btn wow fadeInUp" ">add new button</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>