<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Company') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-success-status class="mb-4" :status="session('message')" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-10">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-4 px-4 text-gray-500 dark:text-gray-100">
                    <form action="{{ url('create-company') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('Company Name')" />
                            <x-text-input id="name" class="block mt-2 w-1/4" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="email" :value="__('Company Email')" />
                            <x-text-input id="email" class="block mt-2 w-1/4" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="logo" :value="__('Insert Logo')" />
                            <x-text-input id="logo" class="block mt-2 w-1/4" type='file' name="logo" :value="old('logo')" required autofocus autocomplete="logo" />

                        </div>
                        <br>
                        <div>
                            <x-input-label for="website" :value="__('Company Website')" />
                            <x-text-input id="website" class="block mt-2 w-1/4" type="text" name="website" :value="old('website')" required autofocus autocomplete="website" />
                        </div>
                        <br>
                        <x-primary-button class="ml-3">
                            {{ __('Create Company') }}
                        </x-primary-button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
