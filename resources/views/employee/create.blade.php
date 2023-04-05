<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add Employee') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <x-success-status class="mb-4" :status="session('success')" />

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ url('add-employee') }}" method="POST">
                        @csrf

                        <div>
                            <x-input-label for="name" :value="__('First Name')" />
                            <x-text-input id="name" class="block mt-2 w-1/4" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="name" :value="__('Last Name')" />
                            <x-text-input id="name" class="block mt-2 w-1/4" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="email" :value="__('Employee Email')" />
                            <x-text-input id="email" class="block mt-2 w-1/4" type="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="company_id" :value="__('Company Name')" />
                            <x-text-input id="company_id" class="block mt-2 w-1/4" type='text' name="company" :value="old('company')" required autofocus autocomplete="company" />
                        </div>
                        <br>
                        <div>
                            <x-input-label for="phone" :value="__('Phone Number')" />
                            <x-text-input id="phone" class="block mt-2 w-1/4" type="number" name="text" :value="old('phone')" required autofocus autocomplete="phone" />
                        </div>

                        <br>

                        <x-primary-button class="ml-3">
                            {{ __('Add Employee') }}
                        </x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
